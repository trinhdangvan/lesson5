<?php
include_once "Point2D.php";

class Point3D extends Point2D
{
    public $z = 0.0;

    public function __construct($x, $y, $z)
    {
        $this->z = $z;
        parent::__construct($x, $y);
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
        return $this->x . " , " . $this->y . " , " . $this->z;
    }

    public function toString()
    {
        return 'hien ra [' . $this->getXYZ() . ']';
    }
}