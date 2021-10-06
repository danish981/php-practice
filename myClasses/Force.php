<?php

namespace newton\lawForces;

class Force {

    public $newtonsForce = 50;
    public $forceAppliedFromDirection = "South 230";
    public $forceAppliedOn = "a chair";

    /**
     * Force constructor.
     * @param int $newtonsForce
     * @param string $forceAppliedFromDirection
     * @param string $forceAppliedOn
     */
    public function __construct($newtonsForce, $forceAppliedFromDirection, $forceAppliedOn) {
        $this->newtonsForce = $newtonsForce;
        $this->forceAppliedFromDirection = $forceAppliedFromDirection;
        $this->forceAppliedOn = $forceAppliedOn;
    }

    /**
     * @return int
     */
    public function getNewtonsForce(): int {
        return $this->newtonsForce;
    }

    /**
     * @param int $newtonsForce
     */
    public function setNewtonsForce(int $newtonsForce) {
        $this->newtonsForce = $newtonsForce;
    }

    /**
     * @return string
     */
    public function getForceAppliedFromDirection(): string {
        return $this->forceAppliedFromDirection;
    }

    /**
     * @param string $forceAppliedFromDirection
     */
    public function setForceAppliedFromDirection(string $forceAppliedFromDirection) {
        $this->forceAppliedFromDirection = $forceAppliedFromDirection;
    }

    /**
     * @return string
     */
    public function getForceAppliedOn(): string {
        return $this->forceAppliedOn;
    }

    /**
     * @param string $forceAppliedOn
     */
    public function setForceAppliedOn(string $forceAppliedOn) {
        $this->forceAppliedOn = $forceAppliedOn;
    }

    // this phpstorm version does not generating getters and setters
    // we are doing it manually
    function __destruct() {
        // TODO: Implement __destruct() method.
    }

    function __call($name, $arguments) {
        // TODO: Implement __call() method.
    }

    public static function __callStatic($name, $arguments) {
        // TODO: Implement __callStatic() method.
    }

    function __get($name) {
        // TODO: Implement __get() method.
    }

    function __set($name, $value) {
        // TODO: Implement __set() method.
    }

    function __isset($name) {
        // TODO: Implement __isset() method.
    }

    function __unset($name) {
        // TODO: Implement __unset() method.
    }

    function __sleep() {
        // TODO: Implement __sleep() method.
    }

    function __wakeup() {
        // TODO: Implement __wakeup() method.
    }

    function __toString() {
        // TODO: Implement __toString() method.
        return $this->getForceAppliedFromDirection() . $this->getForceAppliedOn();
    }

    function __invoke() {
        // TODO: Implement __invoke() method.
    }

    function __debugInfo() {
        // TODO: Implement __debugInfo() method.
    }

    static function __set_state($an_array) {
        // TODO: Implement __set_state() method.
    }

    function __clone() {
        // TODO: Implement __clone() method.
    }

}

