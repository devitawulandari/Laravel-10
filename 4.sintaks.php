<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP 

// Standar Output 
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi bolehmengandung angka
// $nama = "Vita";
// echo 'Halo, nama saya $nama';


// Operator
// artimatika
// * + * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / centemation / concat
// .
// $nama_depan = "Vita";
// $nama_belakang = "Wulan";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Vita"
// $nama .= " " ;
// $nama .= "Wulan";
// echo $nama;  

// Perbandingan 
// <, >, <=, >=, ==, !=
// var_dump(1 === "1")

// identitas 
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>
