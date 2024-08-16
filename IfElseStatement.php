<?php

$nilai = 80;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} else {
    echo "Nilai Anda D" . PHP_EOL;
}

// Syntax Alternatif
if ($nilai >= 80 && $absen >= 80):
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60):
    echo "Nilai Anda C" . PHP_EOL;
else:
    echo "Nilai Anda D" . PHP_EOL;
endif;

// Ternary Operator
echo $nilai >= 70 ? "Selamat Anda Lulus" : "Maaf Anda Tidak Lulus";

// Null Coalescing Operator
$nama = "Eko";
echo $nama ?? "Anonim";

// Null Coalescing Operator dengan isset
echo isset($nama) ? $nama : "Anonim";

// Null Coalescing Operator dengan isset
echo $nama ?: "Anonim";

// Null Coalescing Operator dengan isset
echo $nama ?? "Anonim";