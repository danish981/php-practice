<?php

namespace myPdoClass;

// this class is inside the myPdoClass
class Pdo {

    private string $nextline = "<br>";

    public function pdo() : string {
        return "pdo object method " . $this->nextline;
    }

}



