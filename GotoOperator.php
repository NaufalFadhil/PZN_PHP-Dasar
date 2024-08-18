<?php

// Start: Goto Operator Sederhana
goto a;

echo "Hello World" . PHP_EOL;

a:
echo "Hello Naufal" . PHP_EOL;
// End: Goto Operator Sederhana

echo "====================" . PHP_EOL;

// Start: Goto Operator Case Complex
$counter = 1;

while (true) {
  echo "Perulangan ke-$counter" . PHP_EOL;
  $counter++;

  if ($counter > 5) {
    goto end;
  }
}

end:
echo "Perulangan Selesai" . PHP_EOL;
// End: Goto Operator Case Complex
