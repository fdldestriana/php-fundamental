<?php

$grade = 80;
$extra = 70;
echo "Kamu pintar".PHP_EOL;

if ($grade >= 85 && $extra >= 85) {
	echo "Kamu hebat".PHP_EOL;
} else if ($grade >= 70 && $extra >= 70) {
	echo "Tingkatkan lagi nilaimu".PHP_EOL;
} else {
	echo "Tetap semangat".PHP_EOL;
}

// bentuk lain if else

// if ($grade >= 85 && $extra >= 85):
// 	echo "Kamu hebat".PHP_EOL;
// elseif ($grade >= 70 && $extra >= 70):
// 	echo "Tingkatkan lagi nilaimu".PHP_EOL;
// else:
// 	"Tetap semangat".PHP_EOL;
// endif;

// nested if
if ($grade >= 80) {
	if ($extra >= 70) {
		echo "Kamu auto lulus".PHP_EOL;
	} else {
		echo "Kamu lolos jalur biasa".PHP_EOL;
	}
} else {
	echo "Gak lolos".PHP_EOL;
}