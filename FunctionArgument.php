<?php

// Kode: Function Argument
function sayHello($name) {
  echo "Hello $name" . PHP_EOL;
}

sayHello("Naufal"); // Hello Naufal
sayHello("Fadhil"); // Hello Fadhil
sayHello("Athallah"); // Hello Athallah

// Kode: Function Argument Default Value
function sayHelloWithDefault($name = "Anonymous") {
  echo "Hello $name" . PHP_EOL;
}

sayHelloWithDefault("Naufal"); // Hello Naufal
sayHelloWithDefault(); // Hello Anonymous

// Kode: Kesalahan Default Argument Value
function sayHelloWithDefaultError($name = "Anonymous", $umur = 0) {
  echo "Hello $name, Umur: $umur" . PHP_EOL;
}

sayHelloWithDefaultError("Naufal", 20); // Hello Naufal, Umur: 20
// sayHelloWithDefaultError(20); 
// Fatal error: Uncaught ArgumentCountError: Too few arguments to function sayHelloWithDefaultError()

// Kode: Type Declaration
function sum(int $a, int $b) {
  $total = $a + $b;
  echo "Total $a + $b = $total" . PHP_EOL;
}

sum(100, 100); // Total 100 + 100 = 200

// Kode: Type Declaration Error
sum("100", "100"); // Total 100 + 100 = 200
sum(true, false); // Total 1 + 0 = 1
// sum("a", "b"); // Total 0 + 0 = 0 // Error: Uncaught TypeError: Argument 1 passed to sum() must be of the type int, string given
// sum([], []); // Total 0 + 0 = 0 // Error: Uncaught TypeError: Argument 1 passed to sum() must be of the type int, array given


// Kode: Variable-length Argument List
function sumAll(...$values) {
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5); // Total 1 + 2 + 3 + 4 + 5 = 15
sumAll(...[1, 2, 3, 4, 5]); // Total 1 + 2 + 3 + 4 + 5 = 15

$values = [1, 2, 3, 4, 5];
// sumAll($values); // Fatal error: Uncaught TypeError: Unsupported operand types: int + array
sumAll(...$values); // Total 1 + 2 + 3 + 4 + 5 = 15
