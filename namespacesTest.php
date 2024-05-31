<?php

// before to include, we need to add the namespaces, so that their names are the same

// so if the both classname have the same namespace, we can give them a name, as alias
// this path as namespaces, is an imaginary, we can give any path
// these files are actually classes
use Factory\Administration\Person as adminPerson;
use Factory\Employees\Person as managerPerson;
use outside\Person as factoryPerson;

// but for the path of include, we have to give the real path with extensions too
include("myClasses/Person.php");
include("testClasses/Person.php");
include("classes/Person.php");

// this code will result this
// Factory\Managers\Person::__construct
// Factory\Employees\Person::__construct
// now these classes will be named after the namespaces,
// they are no longer known with their actual names like Person and Person
// now their names are Factory\Managers\Person and Factory\Employees\Person
// and Factory\Administration\Person

// to create an object, we would create an object as alias of particular php class
// object can be created without the () if the class does not have the constructor or blank constructor

$factoryPersonObject = new factoryPerson;
$managerPersonObject = new managerPerson;
$adminPersonObject = new adminPerson;

?>

<link rel="stylesheet" href="style.css">