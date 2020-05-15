var y = [];
var a = [];
$(function(){
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "api.php",
        data: {},
        success: function(data)
        {

                console.log(data);
                y = data.y;
                a = data.x;
        },
        error: function(e)
        {
            console.log(e);
        }
    })


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
  
  let ball,beam;
  let angle = 0.0;
  var delay = 10;
var nextTimer =0;
var whichFrame = 0;
  function setup() {
      createCanvas(windowWidth, windowHeight/2);
      //translate(width, height / 2);
      nextTimer = millis() + delay;
      rectMode(CORNER);
      rotate(-2*PI);
      
      ball = new Ball(250,45);
      beam = new Beam(400,20);
      beam.draw();
      ball.draw();
  }
  
  var x = 0.0;

  
  function draw() {
      background(100);
      background(51);
  
    
    //increase the angle value using the most recent jitter value
    if (millis() > nextTimer) {
        whichFrame = whichFrame + 1;
        // loop around to the beginning.
        if (whichFrame >= y.length) {
          whichFrame = 0;
        }
        // reset the timer for the next frame.
        nextTimer = millis() + delay;
      }
    x = x + 0.1
    move = sin(x/2)*200+200;
   
    translate(width / 2 + 250, height / 2);
    
      x = x + 0.1;
      angle = PI/10;
    push();
    
    //console.log(a[whichFrame]*400);
    x = a[whichFrame]*400;
    
    rotate(x);
    beam.draw();
      ball.draw();
      //ball.move(map(moving[whichFrame], 0, 1, 0, 500, true));
      //console.log(y[whichFrame]);
      ball.move(400-(y[whichFrame]*400))
      console.log(y[whichFrame]);
      //ball.move(400-map(moving[whichFrame], 0, 1, 0, 150, true));
      pop();
      
      
  }