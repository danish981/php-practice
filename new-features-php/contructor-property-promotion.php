
<?php


// -------------------------- old way of initializing properties---------------------
class ConstructorPropertyPromotion
{
    public int $a = 5;
    public int $b = 10;
    public int $c = 15;

    public function __construct(int $a, int $b, int $c)
    {
        $this . $a = $a;
        $this . $b = $b;
        $this . $c = $c;
    }
}

// -------------- new way of initializing properties php 8.0 -----------------------------------------------------

class AnotherTestClassForContructorPropertyPromotion
{
    public function __construct(
        public int $a = 5,
        public int $b = 10,
        public int $c = 15
    ) {
    }
}


// -------------------- example for above --------------------------------

class ExampleClass
{
    public function __construct(private int $point = 0)
    {
    }
}
