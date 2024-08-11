<?php

$name = "Naufal Fadhil Athallah";
echo "Name: " . $name . "\n"; // Name : Naufal Fadhil Athallah

$name = null;
echo "Name: " . $name . "\n"; // Name :

// Mengecek apakah variabel bernilai null
$name = null;
var_dump(is_null($name)); // bool(true) | 1
$name = "Naufal Fadhil Athallah";
var_dump(is_null($name)); // bool(false) | (empty)

// Menghapus variabel (unset)
$contoh = "Halo";
unset($contoh);
// var_dump($contoh); // Undefined variable: $contoh | NULL

// Mengecek apakah variabel sudah pernah dibuat (isset)
$contoh = "Halo";
var_dump(isset($contoh)); // bool(true) | 1
$contoh = null; 
var_dump(isset($contoh)); // bool(true) | 1
