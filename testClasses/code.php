<?php

use Practice\TestClasses\Strawberry;

include('init.php');

$object = new Strawberry("brown", 'srawbetrry', 20);

echo $object->getColor();