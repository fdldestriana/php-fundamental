<?php

// function

function helloWorld($name, $level) {
    echo "Hello $name kamu level $level".PHP_EOL;
}
// $hi = helloWorld();
// var_dump($hi); // -> akan menghasilkan NULL karenan tidak ada return value dari fungsi tersebut

helloWorld("Agung", 10);
helloWorld("Zelda", 20);
helloWorld(20, "Zelda"); // -> akan terbalik saat print string

// named parameter
helloWorld(level: 20, name: "Zelda"); // -> tidak akan terbalik
helloWorld(level: 10, name: "Agung"); // -> tidak akan terbalik

// optional parameter
// biasanya parameter yang optional berada di belakang, sudah memiliki default value
function hello($name, $level = 5) {
    echo "Hello $name kamu level $level".PHP_EOL;
}

hello(name:"Agung");
hello(level: 10, name:"Link");

// return value
function multiply($numberA, $numberB){
    return $numberA * $numberB; // setiap kode yang di bawah return keyword akan diabaikan
}
$result = multiply(10,5);
var_dump($result);

// function variable
// berguna jika kita ingin menjadikan fungsi sebagai parameter dari fungsi lain
function test(){
    echo "TEST".PHP_EOL;
}

function demo(){
    echo "DEMO".PHP_EOL;
}

// $fn = "test";
// $fn();

function firstFormatter($string) {
    return "$string - 888";
}

function secondFormatter($string) {
    return "1010 - $string - 1010";
}

// anonymous function, untuk membuatnya adalah dengan menyimpan ke dalam sebuah variabel
$thirdFormatter = function($string){
    return "xxxx - $string - xxxx";
};

function cetak($string, $formatter) {
    $formattedString = $formatter($string);
    echo $formattedString;
}

$fn = "thirdFormatter"; // -> parameter kedua bisa diganti dengan firstFormatter
cetak("Agung", $thirdFormatter);




