<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 8:30 AM
 */
class TestPoint {
    private $name;
    private $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function showFunction() {
        echo "<br>name : " . $this->name;
        echo "<br>age  : " . $this->age;
    }

    public function __destruct() {
        echo "<br>destructor called";
        echo "<br>GOOD BY CLASS";
    }

    // when the class finished its work, then this is called
    // it is not so oftenly used as compared to contructors

    private function show() {
        echo "name : " . $this->name;
        echo "<br>age : " . $this->age;
    }

}

// new TestPoint("danish mehmood", 24);
// and suppose we want to call its methods, we create an object

$testObject = new TestPoint("burhan wani", 31);
$testObject->showFunction();

?>

<link rel="stylesheet" href="../style.css">
