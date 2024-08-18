<?php

// Kode: Break
$counter = 1;

while (true) {
  echo "Ini adalah while loop ke-$counter" . PHP_EOL;
  $counter++;

  if ($counter > 10) {
    break;
  }
}

echo "====================" . PHP_EOL;

// Kode: Continue
for ($counter = 1; $counter <= 10; $counter++) {
  if ($counter % 2 == 0) {
    continue;
  }

  echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}