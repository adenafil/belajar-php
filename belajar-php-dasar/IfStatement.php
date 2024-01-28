<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) echo "Nilai Anda A\n";
else if ($nilai >= 70 && $absen >= 70) echo "Nilai Anda B\n";
else if ($nilai >= 60 && $absen >= 60) echo "Nilai Anda C\n";
else if ($nilai >= 50 && $absen >= 50) echo "Nilai Anda D\n";
else echo "Nilai Anda E \n";

if (true) :
    echo "Mangan";
    echo "Mantap";
elseif (false) :
    echo "Lembur";
endif;