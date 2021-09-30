<?php

class GoodPerson {
    protected $nextLine = "\r\n";
    private string $personName = "danish mehmood";

    public function getMyName(): string {
        return "danish mehmood mughal " . $this->nextLine;
    }

    public function singlePerson() : string {
        return "the single person " . $this->personName;
    }



}


