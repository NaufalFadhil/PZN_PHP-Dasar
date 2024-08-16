<?php

$nilai = "A";

switch ($nilai) {
  case 'A':
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
    break;
  case 'B':
  case 'C':
    echo "Anda lulus" . PHP_EOL;
    break;
  case 'D':
    echo "Anda tidak lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin Anda salah jurusan" . PHP_EOL;
    break;
}
// Output: Anda lulus dengan sangat baik

// Syntax Alternatif
switch ($nilai):
  case 'A':
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
    break;
  case 'B':
  case 'C':
    echo "Anda lulus" . PHP_EOL;
    break;
  case 'D':
    echo "Anda tidak lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin Anda salah jurusan" . PHP_EOL;
    break;
endswitch;
// Output: Anda lulus dengan sangat baik
