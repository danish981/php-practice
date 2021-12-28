<?php

include("classes/One.php");
include("classes/Two.php");
include("classes/Three.php");
include("classes/Four.php");

(new One)->oneFunction();
(new Two)->test();

(new Four)->classThreeMethod();
(new One)->test();

(new Four)->jack();
(new Two)->func();
(new One)->oneFunction();




