<?php

// Kode: Perulangan Tanpa Henti
// for ( ; ; ) {
//   echo "Hello Looping" . PHP_EOL;
// }

// Kode: Perulanglan Dengan Kondisi
for ($counter = 1; $counter <= 10; $counter++) {
  echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

echo "====================" . PHP_EOL;

// Kode: Perulangan Dengan Init Statement
for ($counter = 1; $counter <= 10;) {
  echo "Ini adalah for loop ke-$counter" . PHP_EOL;
  $counter++;
}

echo "====================" . PHP_EOL;

// Kode: Perulangan Dengan Post Statement
for ($counter = 1; $counter <= 10; $counter++) {
  echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

echo "====================" . PHP_EOL;

// Kode: Perulangan Dengan Multiple Statement
for ($counter = 1, $message = "Hello"; $counter <= 10; $counter++) {
  echo "Ini adalah for loop ke-$counter" . PHP_EOL;
  echo $message . PHP_EOL;
}

echo "====================" . PHP_EOL;

// Kode: Syntax Alternatif
for ($counter = 1; $counter <= 10; $counter++):
  echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;
