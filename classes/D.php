<?php

class D extends C {

    public string $public_data_D = "D<br>";
    public string $public_data_A = "public A overriden in class D<br>";
    public string $public_data_B = "public B overriden in class D<br>";
    public string $public_data_C = "public C overriden in class D<br>";
    public string $protected_data_A = "protected A overriden in class D<br>";
    public string $protected_data_B = "protected B overriden in class D<br>";

    // protected fields overriden public here
    // protected fields overriden public here
    // protected fields overriden public here
    public string $protected_data_C = "protected C overriden in class D<br>";
    protected string $protected_data_D = "D<br>";
    private string $private_data_D = "stringValue__D() class\n";

    public function getPrivateData__D(): string {
        return $this->private_data_D;
    }

    public function public_method_D(): string {
        return "i am public method D()";
    }

    public function protected_method_B(): void {
        parent::protected_method_B(); // TODO: Change the autogenerated stub
    }

    public function protected_method_C(): void {
        parent::protected_method_C(); // TODO: Change the autogenerated stub
    }


    // protected methods overriden public here
    // protected methods overriden public here
    // protected methods overriden public here

    function accessPropertyUsingSelf(): void {
        echo "\nSelf can access public methods only from current class and from parent classes\n";
        self::method__A();
        $this->method__B();
        $this->method__C();
        $this->method__C();
        $this->method__D();
        $this->access__A();
        $this->access__B();
        echo "--------------------------<br>";
    }

    function method__D() {
        echo "D() method ";
    }

    function access__A() {
    }

    function access__B() {
        $this->method__B();
    }

    function accessPropertyUsingThis(): void {
        $this->access__A();
        $this->access__B();
        $this->protected_data_A;
        $this->testField__A;
        self::method__A();
        $this->public_data_B;
        $this->public_data_C;
        $this->protected_data_C;
        $this->public_data_D;
        echo "--------------------------<br>";
    }

    protected function protected_method_D(): string {
        return "I am protected method of class D";
    }

}