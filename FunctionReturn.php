<?php

function sum(int $a, int $b) {
  $total = $a + $b;
  return $total;
}

$result = sum(10, 10);
var_dump($result); // int(20)
var_dump(sum(100, 100)); // int(200)

function getFinalValue(int $value) : string {
  if ($value >= 80) {
    return "A";
  } else if ($value >= 70) {
    return "B";
  } else if ($value >= 60) {
    return "C";
  } else if ($value >= 50) {
    return "D";
  } else {
    return "E";
  }

  echo "This is unreachable code";
}

echo getFinalValue(85) . PHP_EOL; // A
echo getFinalValue(75) . PHP_EOL; // B
echo getFinalValue(20) . PHP_EOL; // E

// Return Type Declaration Error
function sumTypeDelcaration(int $a, int $b): int {
  $total = $a + $b;
  return $total;
}

var_dump(sumTypeDelcaration(100, 100)); // int(200)