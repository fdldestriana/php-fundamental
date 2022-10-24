<?php

// >= 85, A
// >= 70, B
// >= 65, C
// >= 50, D
// < 50, E

$grade = readline("Berapa nilai kamu? : ");
switch($grade) {
    case 85:
        echo "Nilai kamu A";
        break;
    case 70:
        echo "Nilai kamu B";
        break;
    case 65:
        echo "Nilai kamu C";
        break;
    case 50:
        echo "Nilai kamu D";
        break;
    default:
        echo "Nilai kamu E";
}

