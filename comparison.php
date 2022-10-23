<?php
// ==
// kode di bawah akan menghasilkan true karena tipe data pada variabel
// string akan dikonversi terkebih dahulu kepada integer
$varA = "5";
$varB = 5;
$result = $varA == $varB;
var_dump($result);

// ===
// untuk melihat nilai tidak hanya dari tipe data yang dikonversi maka dapat
// menggunakan operasi ===
$result = $varA === $varB;
var_dump($result);

// !=
$result = $varA != $varB;
var_dump($result);

// !==
$result = $varA !== $varB;
var_dump($result);

// <
$varC = 10;
$result = $varB < $varC;
var_dump($result);

// >
$result = $varB > $varC;
var_dump($result);

// <=
$result = $varB <= $varC;
var_dump($result);

// >=
$result = $varB >= $varC;
var_dump($result);