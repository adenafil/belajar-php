<?php

require_once "data/Shape.php";

use Data\{Shape, Rectange};

$shape = new Shape();
echo $shape->getCorner();

$rectangle = new Rectange();
echo $rectangle->getCorner();
echo $rectangle->getParentCorner();