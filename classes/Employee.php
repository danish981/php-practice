<?php

// necessary to incldue the file
// otherwise it will give an error
include("PersonParent.php");

class Employee extends PersonParent
{
    private $salary = 0;

    function __construct($name, $salary)
    {
        $this->setName($name);
        $this->setSalary($salary);
    }

    private function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function getSalary()
    {
        return $this->salary;
    }

}

$employeeObject = new Employee("danish mehmood", 40000);
echo "\nemployee name : " . $employeeObject->getName();
echo "\nemployee salary " . $employeeObject->getSalary();

?>

<link rel="stylesheet" href="../style.css">
