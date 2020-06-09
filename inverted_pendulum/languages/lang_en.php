<?php
/*
------------------
Language: English
------------------
*/

define('MAIN', 'Final project');


define('DESCRIPTION','Check or uncheck ckeckbox to show or hide graph or simulation');
define('GRAPH', 'Graph');
define('SIMULATION','Simulation');
define('POSITION', 'Ball position');
define('SEND', 'Send');
define('ALERT', 'Entered input is not valid, the input must be  between 0-0.95');
define('TITLE1','Inverted pendulum');
define('TITLE2','Ball Beam');
define('TITLE3','Suspension');
define('SUSP1','The graph indicates the changing position of the wheel over time when approaching various obstacles.');
define('CHOOSE','Choose');
define('CLOSE','Close');
define('DOCUMENTATION','API Documentation');
define('CAS_DOC','CAS API Documentation');
define('DESC_API','API Description');
define('PREKAZKA','Obstacle height');


//vypocet.php
define('COUNT','Calculation');
define('FORMULAR', 'Calculation form');
define('INPUT', 'Input');
define('OUTPUT','Output');

//index.php
define('HOME', 'Home');
define('CONTACT', 'Contact');
define('WELCOME','Welcome to our final project. Our main focus was to create three simulations : Ball beam, Suspension and Inverted pendulum. Here is simple description of them... ');
define('DESCRIPTION_INVERTED',' An inverted pendulum is a pendulum that has its center of mass above its pivot point. It is unstable and without additional help will fall over. It can be suspended stably in this inverted position by using a control system to monitor the angle of the pole and move the pivot point horizontally back under the center of mass when it starts to fall over, keeping it balanced.' );
define('DESCRIPTION_BALL', 'The ball and beam system consists of a long beam which can be tilted by a servo or electric motor together with a ball rolling back and forth on top of the beam. The significance of the ball and beam system is that it is a simple system which is open-loop unstable. Even if the beam is restricted to be very nearly horizontal, without active feedback, it will swing to one side or the other, and the ball will roll off the end of the beam. To stabilize the ball, a control system which measures the position of the ball and adjusts the beam accordingly must be used.');
define('DESCRIPTION_SUSPENSION',' The job of a car suspension is to maximize the friction between the tires and the road surface, to provide steering stability with good handling and to ensure the comfort of the passengers.Suspension systems must support both road holding/handling and ride quality, which are at odds with each other. The tuning of suspensions involves finding the right compromise. It is important for the suspension to keep the road wheel in contact with the road surface as much as possible, because all the road or ground forces acting on the vehicle do so through the contact patches of the tires.');
define('SHOW','Show More');
//welcome.php

define('INFO_API','To get access to our page please enter valid api key into page URL.');
define('HOWTO1', "Into URL https://wt29.fei.stuba.sk:4429/finalne_zadanie/welcome.php enter API key by following this pattern.");
define('HOWTO2', 'Pattern : https://wt29.fei.stuba.sk:4429/finalne_zadanie/welcome.php?API_KEY=ENTER_HERE_API_KEY');
define('HOWTO3',"Key have it's own hidden place. You should know where it is.");
define('HOWTO4', 'After you entered key, please refresh page twice.');
define('ERROR','Bad API KEY, please enter valid one.');
define('ERROR2','You did not enter API KEY. Please, enter API KEY.');

//work.php

define('WORK','Work');
define('TITLE5','Description of the API');
define('TITLE4','Work');
define('BILING','Bilingualism');
define('API','API for the installed CAS');
define('API_KEY','API Key');
define('INDIVIDUAL','Individual work');
define('LOGGING','Logging');
define('DESC_API','API description');
define('STATISTICS','Statistics');
define('MATHEMATICS','Mathematics');

define('DRAGANA', 'In these graphs you can follow the change in the position of the inverted pendulum. The blue line indicates the change of position over time, and the orange line change of the angle.I processed the data using Octave. The values ​​in the graph as well as the position and angle can be changed by selecting a number in the range 0 - 1, during which the graph will be drawn with new values ​​and the animation will start with these values.');
define('ZELKO','My project was Ball Beam. The first graph shows the changing position of the ball over time and the second graph shows the angle of inclination of the rod as a function of time. The animation itself depends on both the parameters obtained from Octave and the entered parameters from the user. When the user enters a parameter in the range 0-1, the animation starts, and the values ​​on the graph also change based on the new data.');
define('VLADO','In this case of suspension, the animation shows us the position of the wheels when encountering an obstacle. When entering parameters from 0 to 1, both the graph and the simulation show the values of the change in the position of the wheel.');

//stat.php
define('EMAIL','Please enter Your e-mail if You want to recieve page statistics.');
define('PROJECT', 'Task');
define('COUNTER','Number of uses');
define('TABLE',' This table shows number of visits/uses of listed pages/tasks.');

//api-docs

define('VYPOCET','Returns the calculation');
define('POZIADVYP','Returns the result of the requested calculation');
define('RET_ARR','Returns arrays with positions specifically for simulation animation.');



?>