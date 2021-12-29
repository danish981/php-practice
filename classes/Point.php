<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 8:03 AM
 */
class Point
{
    private $x;
    private $y;

    public function setPoints(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function showPoints(): void
    {
        echo "x = " . $this->x . ", y = " . $this->y;
    }

}

$p = new Point();
$p->setPoints(2, 5);
$p->showPoints();   // x = 2, y = 5