<?php

// POLYMORPHISM
// POLYMORPHISM
// POLYMORPHISM
// POLYMORPHISM

include("classes/TestParentClass.php");
include("classes/TestChildClass.php");
include("classes/AnotherChildClass.php");

$parentObject = new TestParentClass();
echo $parentObject->whoAmI();
$parentObject->sameNameMethod();

$childObject = new TestChildClass();
echo $childObject->whoAmI();
$childObject->sameNameMethod();

$anotherChildobject = new AnotherChildClass();
echo $anotherChildobject->sameNameMethod();
echo $anotherChildobject->whoAmI();




