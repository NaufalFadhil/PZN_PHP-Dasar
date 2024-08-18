<?php

// Kode: Variable Function
function foo() {
  echo "FOO" . PHP_EOL;
}

function bar() {
  echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName(); // FOO

$functionName = "bar";
$functionName(); // BAR

// Kode: Penggunaan Variable Function
function sayHello(string $name, $filter) {
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
  return "Sample $name";
}

sayHello("Eko", "sampleFunction");
sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");
