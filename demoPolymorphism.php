<?php

include("classes/GoodPerson.php");
include("classes/EmployeePerson.php");

$goodPersonObject = new GoodPerson();
echo $goodPersonObject->myName();

$employeeObject = new EmployeePerson();
$employeeObject->myName();

