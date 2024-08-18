<?php

// Kode: While Loop
$counter = 1;

while ($counter <= 10) {
  echo "Ini adalah while loop ke-$counter" . PHP_EOL;
  $counter++;
}

echo "====================" . PHP_EOL;

// KodeL Syntax Alternatif While Loop
$counter = 1;

while ($counter <= 10):
  echo "Ini adalah while loop ke-$counter" . PHP_EOL;
  $counter++;
endwhile;
