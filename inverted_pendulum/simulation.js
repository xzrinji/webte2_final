var dlzka,vozik_dlzka,vozik_vyska,rotacia,pozicia_vozika;
var poziciaY;
var nextTimer =0;
var whichFrame = 0;
var delay = 10;
function setup() {
  createCanvas(400, 400);
  dlzka = 500;
  vozik_dlzka = 150;
  vozik_vyska = 50;
  poziciaY = 100;
  dlzka_kyvadla = 150;
  rotacia = 0;
  pozicia_vozika = 0.5
  rotacia = PI/4;
}


function draw() {
   background(255);
    if (millis() > nextTimer) {
        whichFrame = whichFrame + 1;
        if (whichFrame >= y.length) {
          whichFrame = 0;
          
        }
        nextTimer = millis() + delay;
      }
  
    rotacia = -a[whichFrame];
    pozicia_vozika = y[whichFrame];
   
    translate(map(pozicia_vozika,0,1,-width/2+vozik_dlzka/2,width/2-vozik_dlzka/2), 0);
    translate(width / 2, height / 2);
    push();
    translate(0,poziciaY);
    rotate(sin(3*rotacia));
    line(0, -dlzka_kyvadla, 0 , 0 );
    fill('red');
    ellipse(0, -dlzka_kyvadla, 30,30);
    pop();
    fill('gray');
    rect(-vozik_dlzka/2,poziciaY,vozik_dlzka,50);
    fill('white');
    ellipse(vozik_dlzka/2-10, poziciaY+vozik_vyska, 20, 20);
    ellipse(-vozik_dlzka/2+10, poziciaY+vozik_vyska, 20, 20);
      
  //ellipse(100, 360, 20, 20);
}
