var nextTimer =0;
var whichFrame = 0;
var delay = 10;
var koef;
function setup() {
    let renderer = createCanvas(windowWidth, windowHeight/2);
      renderer.parent("canvas-div");
    background(100);
    nextTimer = millis() + delay;
    koef = 200;
}

a = [0];
y = [0.5];
function draw() {
	background(50);
	//angle = mouseX/width*2*PI;
	//angle = -;
    if (millis() > nextTimer) {
        whichFrame = whichFrame + 1;
        if (whichFrame >= y.length) {
          whichFrame = y.length-1;
          
        }
        nextTimer = millis() + delay;
    }
   
    
    noStroke();
    
	position = 25 + y[whichFrame] * (width/2-50);
	angle = -a[whichFrame] * 400;
	motorRadius =  height/3;
	
	push();
		translate(7*width/10,5*height/6);
		rotate(-PI);
		rotate(angle*PI);
		stroke(190);
		fill(80);
		strokeWeight(10);
		
		ellipse(0,0, motorRadius, motorRadius);
        
		strokeWeight(1);

		push();
			translate(motorRadius/2,0);
			rotate(3*PI);
			rotate(-angle*PI-angle/PI*3);
			rectMode(RADIUS)
			noStroke();
			fill(110, 110, 110);
			rect(0,-70-angle*300, 10, 70+angle*300);
		pop();
	pop();
    push();
		translate(width/4, height/2);
		rotate(-angle);
		fill(230,0,0);
		ellipse(position,-25,50,50);
		fill(235,235,235);
		//rect(0,0, width/2, 20)
        fill(50);
		
        rect(0,0, width, -200)
  
	pop();
	
	push();
		translate(width/4, height/2);
		rotate(-angle);
		fill(230,0,0);
		ellipse(position,-25,50,50);
		fill(235,235,235);
		rect(0,0, width/2, 20)
        fill(50);
		
        //rect(0,0, width/2, -200)
  
	pop();
	
}