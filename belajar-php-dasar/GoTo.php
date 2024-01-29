<?php

goto a;
b:
echo "Hello C\n";

a:
echo "Hello A\n";
goto b;

#Goto Bisa Memberhentikan Looping
/*
$counter = 1;
while (true) {
    echo "While Loop $counter\n";
    $counter++;
    if ($counter > 10) goto end;
}

end:
echo "End Loop";
*/