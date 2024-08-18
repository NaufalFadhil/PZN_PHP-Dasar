<?php

// Kode: Anonymous Function
$sayHello = function (string $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("Naufal"); // Hello Naufal
$sayHello("Fadhil"); // Hello Fadhil

// Kode: Anonymous Function Sebagai Argument
function sayGoodBye(string $name, $filter) {
  $finalname = $filter($name);
  echo "Good Bye $finalname" . PHP_EOL;
}

sayGoodBye("Naufal", function (string $name): string {
  return strtoupper($name); 
}); // Good Bye NAUFAL

// Kode: Anonymous Function Sebagai Argument dengan Variable Function
$filterFunction = function (string $name): string {
  return strtoupper($name);
};

sayGoodBye("Fadhil", $filterFunction); // Good Bye FADHIL

// Kode: Mengakses Variable di Luar Anonymous Function
$firstName = "Naufal";
$lastName = "Fadhil";

// Error karena variable $firstName dan $lastName di luar scope anonymous function
// $fullName = function (): string {
//   return $firstName . " " . $lastName; 
// };

$showFullName = function () use ($firstName, $lastName): void {
  echo "Hello $firstName $lastName" . PHP_EOL;
};

$showFullName(); // Hello Naufal Fadhil

// Tidak bisa mengubah variable di luar scope anonymous function
$firstName = "Fadhil";
$lastName = "Athallah";

$showFullName(); // Hello Naufal Fadhil | Tidak berubah karena sudah di lock di use
