<?php

require_once "./helper/MathHelper.PHP";

use Helper\{MathHelper};

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Afah iyah";

echo MathHelper::$name . PHP_EOL;

var_dump(MathHelper::sum(1, 2, 3, 4, 5, 6, 7,8, 9));

$arr = [1, 2, 3, 4, 5];

var_dump(MathHelper::sum(...$arr));