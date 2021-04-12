<?php

class Point2D
{
    public $x = 0.0;
    public $y = 0.0;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


    public function setX($x)
    {
        $this->x = $x;
    }

    public function getX()
    {
        return $this->x;
    }


    public function setY($y)
    {
        $this->y = $y;
    }


    public function getY()
    {
        return $this->y;
    }


    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


    public function getXY()
    {
        return $this->x . " , " . $this->y;
    }

    public function toString()
    {
        return 'hien ra [' . $this->getXY() . ']';
    }
}