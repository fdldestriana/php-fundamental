<?php
// array_keys, mengembalikan keys dari sebuah array dalam bentuk array juga
$array = [1,2,3,4,5];
$keys = array_keys($array);
var_dump($keys);

$array = ["first_name" => "Agung", "last_name" => "Setiawan", "hobby" => "gaming"];
$keys = array_keys($array);
var_dump($keys);

// array_values, mengembalikan values dari sebuah array dalam bentuk array juga
$values = array_values($array);
var_dump($values);

// array_key_exist, mengembalikan boolean jika suatu array mengandung key tertentu atau tidak
$result = array_key_exists("name", $array);
var_dump($result);
$result = array_key_exists("first_name", $array);
var_dump($result);

// sort, mengembalikan boolean, dan berguna untuk mengurutkan nilai dari sebuah array
$arrayNumber = [3,4,5,2,1];
var_dump($arrayNumber);
$sorted = sort($arrayNumber);
var_dump($arrayNumber);
var_dump($sorted);

// array_map, menghasilkan array lain dari pemrosesan array lama
$powerArrayNumber = array_map(function($num){
    return $num ** 2;
}, $arrayNumber);
var_dump($powerArrayNumber);

// array_map, mengembalikan nilai dari array yang memenuhi kriteria
$filtered = array_filter($powerArrayNumber, function($num){
    return $num >= 15;
});
var_dump($filtered);