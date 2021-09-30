<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 6:41 AM
 */

// ChildClass extends the AbstractClass
class ChildClass extends AbstractClass {
    public $emailAddress;
    private $id;

    public function __construct(int $id, string $email) {
        $this->id = $id;
        if ($this->id < 100 && $this->id > 300) {
            $this->id = 200;
        }
        $this->emailAddress = $email;
    }

    function getRandomValue(int $lowerValue, int $upperValue): int {
        // TODO: Implement getRandomValue() method.
        return rand($lowerValue, $upperValue);
    }

    function getMyName(): void {
        // TODO: Implement getMyName() method.
        echo "danish mehmood mughal\n";
        // cannot use the return
    }
}