<?php

$firstName = "Naufal";
$lastName = "Fadhil";

// Dengan menggunakan arrow function, kita bisa mengakses variable di luar scope
$sayHello = fn () => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHello(); // Hello Naufal Fadhil

$modSayHello = fn (string $name) => "Hello $name" . PHP_EOL;

echo $modSayHello("Fadhil Athallah"); // Hello Fadhil Athallah
