<?php

$cara2 = ["Naufal", "Fadhil", "Athallah"];

// Mengakses array index ke-0
var_dump($cara2[0]); // string(6) "Naufal"

// Mengubah nilai array index ke-0
$cara2[0] = "Fadhil";
var_dump($cara2[0]); // string(6) "Fadhil"

// Menghapus array index ke-1
unset($cara2[1]);
var_dump($cara2);
/**
 * array(2) {
 * [0]=> string(6) "Fadhil"
 * HATI-HATI! Karena index ke-1 hilang, tidak melakukan re-index
 * [2]=> string(8) "Athallah"
 * }
 */

// Menambahkan nilai array index ke-3
$cara2[] = "Naufal";
var_dump($cara2);
/**
 * array(3) {
 * [0]=> string(6) "Fadhil"
 * [2]=> string(8) "Athallah"
 * [3]=> string(6) "Naufal"
 * }
 */

// Menghitung jumlah array
var_dump(count($cara2)); // int(3)
