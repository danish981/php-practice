<?php

class GoodPerson {
    protected string $nextLine = "\r\n";
    private string $personName = "danish mehmood";

    public function getMyName(): string {
        return "danish mehmood mughal " . $this->nextLine;
    }

    public function singlePerson(): string {
        return "the single person " . $this->personName;
    }

    public function myName(string $myName): string {
        return $myName;
    }

    public function fianceeName(string $name): string {
        return $name;
    }

}


