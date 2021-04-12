<?php
include "Point2D.php";
include "Point3D.php";
$Point2D = new Point2D(3, 6);
$Point3D = new Point3D(2, 3, 4);
echo $Point2D->toString() . "<br>";
echo $Point3D->toString();