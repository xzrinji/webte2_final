var y = [0.5];
var a = [];
var whichFrame = 0;
$(function(){
  

    

})


class Ball {
    constructor(x,y) {
         this.x = x;
          this.y = y;
    }
      
      move(x)
      {
          this.x = x;
      }
      
    draw()
    {
       ellipse(this.x,this.y,50,50);
    }  
    
  }
  
  
  class Beam{
      constructor(width, height){
          this.width = width;
          this.height = height;
      }
      
      draw(){
          
        rotate(PI);
        rect(0,0,this.width,this.height);
          
          
          
      }
  }
  
  function windowResized() { resizeCanvas(windowWidth/2, windowHeight/2); }

  let ball,beam;
  let angle = 0.0;
  var delay = 10;
var nextTimer =0;

  function setup() {
      
      let renderer = createCanvas(windowWidth/2, windowHeight/2);
      renderer.parent("canvas-div");
      nextTimer = millis() + delay;
      rectMode(CORNER);
      rotate(-2*PI);
      noStroke();
      ball = new Ball(250,45);
      beam = new Beam(422.5,20);
      beam.draw();
      ball.draw();
  }
  
  var x = 0.0;

  var end = false;
  function draw() {
      background(52,58,64);
      //background(51);
  
    console.log("2");
    if (millis() > nextTimer) {
        whichFrame = whichFrame + 1;
        if (whichFrame >= y.length) {
          //whichFrame = 0;
          
        }
        nextTimer = millis() + delay;
        console.log(whichFrame);
      }
   
   
    translate(width / 2 + 250, height / 2);
    
    push();
    
    //console.log(a[whichFrame]*400);
    if(!end)
      x = a[whichFrame]*400;
    
    rotate(x);
    beam.draw();
      ball.draw();
      ball.move(400-(y[whichFrame]*400))
 
      pop();
      
      
  }