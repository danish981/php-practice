<?php

include("classes/GoodPerson.php");
include("classes/EmployeePerson.php");

$goodPersonObject = new GoodPerson();
echo $goodPersonObject->myName('danishmehmood981');

$employeeObject = new EmployeePerson();
$employeeObject->myName();




