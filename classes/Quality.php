<?php

namespace tukkaBazi\nawaAaaya\Sohneya;

class Quality {

    public function methodAccess(): string {
        return "I am from " . __METHOD__;
    }

    public function anotherFunction(string $name = NULL): int {
        return strlen($name);
    }

}


