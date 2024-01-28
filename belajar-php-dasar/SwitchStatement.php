<?php

$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik\n";
        break;
    case "B":
    case "C";
        echo "Anda Lulus\n";
        break;
    case "D":
        echo "Anda tidak Lulus\n";
        break;
    default:
        echo "Mungkin Anda Salah Jurusan.\n";
};

switch ($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik\n";
        break;
    case "B":
    case "C";
        echo "Anda Lulus\n";
        break;
    case "D":
        echo "Anda tidak Lulus\n";
        break;
    default:
        echo "Mungkin Anda Salah Jurusan.\n";
    endswitch;