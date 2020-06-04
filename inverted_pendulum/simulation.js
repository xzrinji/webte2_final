<<<<<<< HEAD
var canvas = document.getElementById('Canvas_One');
var context = canvas.getContext('2d');
var i;
var x;
var sp;
//code for static string - grey colour
context.beginPath();
context.moveTo(180, 380);
context.lineTo(200, 135);
context.lineWidth = 5;
context.strokeStyle = "grey";
context.stroke();
// code for the static ball - gradient blue
context.beginPath();
context.arc(200, 150, 20, 0, 2 * Math.PI, false);
var grd = context.createRadialGradient(200, 150, 2, 200, 150, 18);
// light blue
grd.addColorStop(0, '#8ED6FF');
// dark blue
grd.addColorStop(1, '#0000ff');
context.fillStyle = grd;
context.fill();
// function for the animation
function circ() {
    context.clearRect(0, 0, canvas.width, canvas.height);
    i = eval(document.getElementById('h').value) + 10;
    context.beginPath();
    context.moveTo(180, 380); context.lineTo(200 + 40 * Math.sin(i * Math.PI / 180), 135);
    context.lineWidth = 5;
    context.strokeStyle = "grey";
    context.stroke();
    context.beginPath();
    context.arc(200 + 40 * Math.sin(i * Math.PI / 180), 150, 20, 0, 2 * Math.PI, false);
    if (i == 360 || i > 360) { i = 0; }
//alert(i);
//alert(i);
    document.getElementById('h').value = i;
//create radial gradient
    var grd = context.createRadialGradient(200 + 40 * Math.sin(i * Math.PI / 180), 150, 2, 200 + 40 * Math.sin(i * Math.PI / 180), 150, 18);
// light blue
    grd.addColorStop(0, '#8ED6FF');
// dark blue
    grd.addColorStop(1, '#0000ff');
    context.fillStyle = grd;
    context.fill();
}
// function for timing
function anim() {
    if
    (document.getElementById('R1').checked)
    { sp = 200; }
    else if (document.getElementById('R2').checked) { sp = 100; }
    else if (document.getElementById('R3').checked) { sp = 80; }
    else
    { sp = 200; }
    x = window.setInterval('circ()', sp);
}

function update(){
    var checkbox = $(this);
    var name = checkbox.data('name');
    if( checkbox.is(':checked') ) {
        $( '#' + name ).show();
    } else {
        $( '#' + name ).hide();
    }
}

//just setup change and each to use the same function
$('.show_hide').change(update).each(update);

=======
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
>>>>>>> f8cdbae8a8a38621e336351a5281543be34a204b
