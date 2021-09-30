<?php

// before the include, we need to add the namespases, so that their names are the same

// so if the both classnames have the same namespace, we can give them a name, as alias
// this path as namepaces, is an imaginary, we can give any path
// these files are actually classes
use Factory\Administration\Person as adminPerson;
use Factory\Employees\Person as managerPerson;
use Factory\Managers\Person as factoryPerson;

// but for the path of include, we have to give the real path with extensions too
include("myClasses/Person.php");
include("testClasses/Person.php");
include("classes/Person.php");

// this code will results this
// Factory\Managers\Person::__construct
// Factory\Employees\Person::__construct
// now these classes will be named after the namespaces,
// they are no longer known with their actual names like Person and Person
// now their names are Factory\Managers\Person and Factory\Employees\Person
// and Facotory\Administration\Person

// to create an object, we would create an object as alias of particular php class
// object can be created without the () if the class does not have the constructor or blank constructor

$factoryPersonObject = new factoryPerson;
$managerPersonObject = new managerPerson;
$adminPersonObject = new adminPerson;

echo "asdlfaksdflk<br>";
echo "random string <span><span>bla bla bla</span><br>";
echo "bla bla bla string \n";
echo "stringggggggggggggggg <div>";
echo "stringggggggggggggggg";



?>
<link rel="stylesheet" href="style.css">