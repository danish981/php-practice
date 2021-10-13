<?php

// POLYMORPHISM
// POLYMORPHISM
// POLYMORPHISM
// POLYMORPHISM

include("classes/TestParentClass.php");
include("classes/TestChildClass.php");
include("classes/AnotherChildClass.php");

$parentObject = new TestParentClass();
$parentObject->whoAmI();
$parentObject->sameNameMethod();

$childObject = new TestChildClass();
$childObject->whoAmI();
$childObject->sameNameMethod();

$anotherChildobject = new AnotherChildClass();
$anotherChildobject->sameNameMethod();
$anotherChildobject->whoAmI();




