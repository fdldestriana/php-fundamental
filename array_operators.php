<?php

// Union, +
$arrayA = [1,2,3];
$arrayB = [4,5,6];

// kode di bawah akan menghasilkan 1,2,3 karena $arrayB dengan item 4,5,6
// memiliki index yang sama dengan $arrayB, yaitu dimulai dari index 0
// maka yang akan menjadi nilai dari variabel $result adalah array yang 
// plaing kiri dari tanda +, buktikan dengan melakukan operasi menjadi
// $arrayB + $arrayA, maka hasilnya akan menjadi 4,5,6
$result = $arrayA + $arrayB;
var_dump($result);

// hasil yang berbeda akan terlihat jika kita memiliki item yang lain
// dengan index yang tidak dimiliki oleh salah satu array
$arrayC = [4,5,6,7,8];
$result = $arrayA + $arrayC;
$result = $arrayC + $arrayA;
var_dump($result);

// berlaku juga pada array associative
$arrayD = ["Agung"];
$arrayE = ["Gundam", "Setiawan"];
$result = $arrayD + $arrayE;
var_dump($result);

// Equality, ==
// menghasilkan boolean jika kedua array sama pasangan key valuenya
$arrayA = [1,2,3];
$arrayB = [1,2,3];
$arrayC = [2,3,1];
$arrayD = [1 => 2, 2 => 3, 0 => 1];
var_dump($arrayA == $arrayB);
var_dump($arrayA == $arrayC);
var_dump($arrayA == $arrayD);

// Identity, ===
// menghasilkan boolean jika kedua array sama pasangan key valuenya
// namun urutannya juga sama, serta tipe datanya juga sama
var_dump($arrayA === $arrayB);
var_dump($arrayA === $arrayD);