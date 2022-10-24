<?php

// strlen, digunakan untuk mendapatkan sting length
echo strlen("saya ");

echo "\n";

// explode, digunakan untuk memecah string menjadi array
$titles = "judul satu-judul dua-judul tiga";
$array = explode("-", $titles);
var_dump($array);

// trim, digunakan untuk menghilangkan karakter yang tidak diinginkan, seperti whitespace atau spasi
// trim untuk kiri kanan string
// ltrim untuk sebelah kiri string
// rtrim untuk sebelah kanan string
$title = "   Judul buku   ";
echo trim($title);

// str_contains, digunakan untuk mengecek apakah sebuah kalimat memiliki kata tertentu
// dia akan mengembalikan boolean, yang direpresentasikan sebagai 1 untuk true
// dan tidak akan menampilkan apapun saat hasilnya false
echo "\n";
$desctiption = "Saya sedang belajar PHP";
echo str_contains($desctiption, "Belajar");

// str_repeat, digunakan untuk mencetak string sebanyak n kali
echo "\n";
echo str_repeat("PHP ", 10);

// str_replace, digunakan untuk mengganti sebuah string dengan string lain
echo "\n";
$belajar = "saya sedang belajar Java";
echo str_replace("Python", "PHP", $belajar);
// karena Python tidak ada dalam $belajar, maka echo akan menghasilkan 
// saya sedang belajar Java

// strrev, digunakan untuk membalik order dari sebuah string
echo "\n";
echo strrev("belajar");

// strtolower strtoupper, digunakan untuk mengubah string menjadi lowercase atau uppercase
echo "\n";
$belajar = "belajar";
$bahasa = "PHP";
echo strtolower($bahasa);
echo "\n";
echo strtoupper($belajar);