<?php

$nama = "Naufal Fadhil";

// Menggunakan Dot Operator
echo "Hello " . $nama . ", Selamat Belajar PHP!" . PHP_EOL; // Hello Naufal Fadhil, Selamat Belajar PHP!

// Menggunakan Variabel Parsing
echo "Hello $nama, Selamat Belajar Golang!" . PHP_EOL; // Hello Naufal Fadhil, Selamat Belajar Golang!

// Menggunakan Curly Brace - Berguna ketika kita ingin menambahkan karakter setelah variabel
$var = "var";
echo "This is {$var}s" . PHP_EOL; // This is vars
