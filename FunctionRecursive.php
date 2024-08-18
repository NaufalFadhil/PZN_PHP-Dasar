<?php

function factorialLoop(int $value): int
{
  $total = 1;
  for ($i = 1; $i <= $value; $i++) {
    $total *= $i;
  }
  return $total;

  // How it works: 5 * 4 * 3 * 2 * 1
}

var_dump(factorialLoop(5)); // int(120)

function factorialRecursive(int $value): int
{
  if ($value == 1) {
    return 1;
  } else {
    return $value * factorialRecursive($value - 1);
  }

  // How it works: 5 * 4 * 3 * 2 * 1
}

var_dump(factorialRecursive(5)); // int(120)

// Problem: Recursive Function
// Memory Overflows (Stack Overflow) because the function call is too deep and the memory is full because the function call is not completed.
// Solution: Use Tail Recursion
// Tail Recursion is a recursive function that calls itself at the end of the function.

// Tail Recursion
function factorialTailRecursive(int $value, int $total = 1): int
{
  if ($value == 1) {
    return $total;
  } else {
    return factorialTailRecursive($value - 1, $total * $value);
  }

  // How it works: 5 * 4 * 3 * 2 * 1
}

var_dump(factorialTailRecursive(5)); // int(120)

// Tail Recursion is not supported in PHP
// But you can use a trick to make it work
// The trick is to use a helper function
function factorial(int $value): int
{
  return factorialHelper($value);
}

function factorialHelper(int $value, int $total = 1): int
{
  if ($value == 1) {
    return $total;
  } else {
    return factorialHelper($value - 1, $total * $value);
  }
}

var_dump(factorial(5)); // int(120)

// Stress Test Stack Overflow
// function loop(int $value): void
// {
//   if ($value == 0) {
//     echo "End Loop" . PHP_EOL;
//   } else {
//     echo "Loop-$value" . PHP_EOL;
//     loop($value - 1);
//   }
// }

// loop(3_000_000);

// Result:
// Macbook Pro M2 8/512GB
// Loop-2334419 - Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 262144 bytes)
