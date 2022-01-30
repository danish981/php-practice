<?php

namespace Practice\TestClasses;

class Fruit {

    private string $color;
    private string $name;
    private int $weight;

    public function __construct(string $color, string $name, int $weight) {
        $this->color = $color;
        $this->name = $name;
        $this->weight = $weight;
    }

    public function setName(string $name): void {
        $this->color = $name;
    }

    public function getName(): string {
        return $this->name ?? 'not-named-fruit';
    }

    public function setColor(string $colorName): void {
        $this->color = $colorName;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getWeight(): int {
        return $this->weight;
    }


    protected function setWeight(int $weight): void {
        $this->weight = $weight;
    }

    public function __destruct() {
        echo "the fruit name was {$this->name} and fruit color is {$this->color}";
    }
}