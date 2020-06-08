class Damper{

	
	bottom(x,y)
	{
		this.x2 = x;
		this.y2 = y;
	}
	
	top(x,y){
		this.x = x;
		this.y = y;
	}
	
	drawTop()
	{
        this.l = 70
		line(this.x,this.y,this.x,this.y+this.l);
		rectMode(CENTER);
		rect(this.x,this.y+this.l,30,5);
	}
	
	drawBottom()
	{
		
		rectMode(CENTER);
		rect(this.x2,this.y2-5/2, 30, 5);
		rect(this.x2-15-5/2,this.y2-15, 5, 80);
		rect(this.x2+15+5/2,this.y2-15, 5, 80);
		
	}
	
	draw(){
		this.drawTop();
		this.drawBottom();
		line(this.x,this.y,this.x,this.y+70);
		rectMode(CENTER);
		rect(this.x,this.y+70,30,5);
	}
}

class Spring {
	
	setFrom(x,y)
	{
		this.x = x;
		this.y = y;
	}
	
	setTo(x,y)
	{
		this.x2 = x;
		this.y2 = y;
	}
	
	draw()
	{
	
  this.l = 30;
  
  beginShape(LINES);
  
  this.segments = 15;
  this.d = (this.y2-this.y)/15;
 
  for(var i = 0; i < this.segments; i++)
  {
    if(i%2 == 0){
      vertex(this.x, (i)*this.d + this.y);
      vertex(this.x+this.l, (i+1)*this.d  + this.y);
    }else
    {
      vertex(this.x+this.l, (i)*this.d  + this.y);
      vertex(this.x, (i+1)*this.d  + this.y);
    }

  }
  endShape();
		
	}
}

class M {
  constructor(x,y,w,h) {
   	this.x = x;
        this.y = y;
        this.initY = y;
		this.w = w;
		this.h = h;
  }
	
	move(y)
	{
		this.y = this.initY + y;
	}
	
  draw()
  {
		 rectMode(CENTER);
		 //fill(255,255,255,0.5);
     rect(this.x,this.y,this.w,this.h);
  }  
  
}

var M1,M2;
var K1,K2;
var b1,b2;
var x,x2;
var nextTimer =0;
var whichFrame = 0;
var delay = 10;
function setup() {
	let cnvs = createCanvas(windowWidth, windowHeight);
	cnvs.parent("animation-div");
    background(100);
    nextTimer = millis() + delay;
	M1 = new M(width/2,height/3,200,120);
	M2 = new M(width/2,height/3+270,200,120);
	K1 = new Spring();
	K2 = new Spring();
	b1 = new Damper();
	b2 = new Damper();
	x = width/2 - 30;
	x2 = width/2 + 30;
	
}

y = 0;

var r;
function draw() {
    
    if (millis() > nextTimer) {
        whichFrame = whichFrame + 1;
        if (whichFrame >= M1y.length) {
          whichFrame = 0;
          
        }
        nextTimer = millis() + delay;
    }
   
	r = height-(0.1*400);
	//noStroke();
	y = y + 0.1
	background(70);
	M1.move(M1y[whichFrame]*400);
	M2.move(M2y[whichFrame]*400);
	K1.setFrom(x,M1.y+M1.h/2);
	K1.setTo(x,M2.y-M2.h/2);
	K2.setFrom(x,M2.y+M2.h/2);
	K2.setTo(x,r);
	b1.top(x2,M1.y+M1.h/2);
	b1.bottom(x2, M2.y-M2.h/2);
	b2.top(x2, M2.y+M2.h/2)
	b2.bottom(x2,r)
	b1.draw();
	b2.draw();
	K1.draw();
	K2.draw();
	
	
	M1.draw();
	M2.draw();
	
	rectMode(CORNER);
	rect(0,r,width,height/4);
	
}