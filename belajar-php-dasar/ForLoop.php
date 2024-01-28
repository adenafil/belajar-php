<?php

for ($counter = 1; $counter <= 10; $counter++) {
    echo "Hello For Loop : $counter \n";
}

for ($counter = 10; $counter >= 1; $counter--) {
    echo "Hello For Loop : $counter \n";
}


for ($counter = 1; $counter <= 10; $counter++) :
    echo "Hello For Loop : $counter \n";
endfor;

for ($counter = 10; $counter >= 1; $counter--) :
    echo "Hello For Loop : $counter \n";
endfor;