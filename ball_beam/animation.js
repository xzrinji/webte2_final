var nextTimer =0;
var whichFrame = 0;
var delay = 10;
function setup() {
    let renderer = createCanvas(windowWidth, windowHeight);
      renderer.parent("canvas-div");
    background(100);
    nextTimer = millis() + delay;
      
}

a = [];
y = [0.5];
function draw() {
	background(50);
	//angle = mouseX/width*2*PI;
	//angle = -;
    if (millis() > nextTimer) {
        whichFrame = whichFrame + 1;
        if (whichFrame >= y.length) {
          whichFrame = 0;
          
        }
        nextTimer = millis() + delay;
    }
   
    
    noStroke();
    
	position = 25 + y[whichFrame] * (width/2-50);
	angle = -a[whichFrame] * 400;
	motorRadius = 180;
	
	push();
		translate(7*width/10,5*height/6);
		rotate(-PI);
		rotate(angle*2.5*PI);
		stroke(190);
		fill(80);
		strokeWeight(10);
		
		ellipse(0,0, motorRadius, motorRadius);
		strokeWeight(1);

		push();
			translate(motorRadius/2,0);
			rotate(3*PI);
			rotate(-angle*2.5*PI-angle/PI*3);
			rectMode(RADIUS)
			noStroke();
			fill(110, 62, 0);
			rect(0,-118+angle*100, 10, 118-angle*100);
		pop();
	pop();
	
	push();
		translate(width/4, height/2);
		rotate(-angle);
		fill(230,0,0);
		ellipse(position,-25,50,50);
		fill(235,235,235);
		rect(0,0, width/2, 20)
	pop();
	
}