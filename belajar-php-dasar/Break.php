<?php

# Break

$counter = 1;

while (true) {
    echo "Hello Break : $counter \n";
    $counter++;

    if ($counter > 10) {
        break;
    }
}
