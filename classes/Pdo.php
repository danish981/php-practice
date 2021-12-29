<?php

namespace myPdoClass;

// this class is inside the myPdoClass
class Pdo
{

    private string $nextline = "<br>";

    function pdo()
    {
        echo "pdo object method " . $this->nextline;
    }

}



