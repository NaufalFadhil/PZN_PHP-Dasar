<?php

function sayHello(string $name, callable $filter) {
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Naufal", "strtoupper"); // Hello NAUFAL
sayHello("Naufal", "strtolower"); // Hello naufal
sayHello("Naufal", function (string $name): string {
  return strtoupper($name);
}); // Hello NAUFAL
sayHello("Naufal", fn ($name) => strtoupper($name)); // Hello NAUFAL
