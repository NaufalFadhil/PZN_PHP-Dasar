<?php

echo "==================== ASSIGN BY REFERENCE" . PHP_EOL;

// Tanpa Reference
$name = "Naufal";
$otherName = $name; // $otherName = "Naufal"
echo "Name: $name" . PHP_EOL; // Name: Naufal

// Menggunakan Reference
$name = "Naufal";
$otherName = &$name; // $otherName = REFERENCE_ADDRESS
$otherName = "Fadhil";
echo "Name: $name" . PHP_EOL; // Name: Fadhil

echo "==================== PASS BY REFERENCE" . PHP_EOL;

// Reference pada Function / Pass by Reference
function increment(int &$value) {
    // echo "Value: $value" . PHP_EOL; // Value: 1
    $value++;
    // echo "Value: $value" . PHP_EOL; // Value: 2
}

$counter = 1;
increment($counter);
echo "Counter: $counter" . PHP_EOL; // Counter: 2
/**
 * Jika tidak menggunakan reference, maka nilai dari variabel $counter tidak akan berubah atau tetap 1 karena mengambil nilai dari variabel $value
 * Jika menggunakan reference, maka nilai dari variabel $counter akan berubah menjadi 2 karena mengubah nilai dari variabel $value
 */

echo "==================== RETURN REFERENCE" . PHP_EOL;

function &getValue() {
    static $value = 100; // $value = 100 > $value = 200 > $value = 200
    return $value;
}

$a = &getValue(); // $a = REFERENCE_ADDRESS
echo "Value A: $a" . PHP_EOL; // Value A: 100

$a = 200; // $value = 200
$b = &getValue(); // $b = REFERENCE_ADDRESS

echo "Value A: $a" . PHP_EOL; // Value A: 200
echo "Value B: $b" . PHP_EOL; // Value B: 200

/**
 * Penjelasan:
 * 1. Function getValue() akan mengembalikan reference dari variabel $value
 * 2. Variabel $a akan menyimpan reference dari variabel $value
 * 3. Karena $a adalah reference dari $value, maka ketika $a diubah nilainya, maka $value juga akan berubah
 * 4. Variabel $b akan menyimpan reference dari variabel $value
 * 5. Karena $b adalah reference dari $value, maka ketika $b diubah nilainya, maka $value juga akan berubah
 * 6. Karena $value adalah static, maka nilai dari $value akan tetap tersimpan meskipun function getValue() sudah selesai dijalankan
 * 7. Sehingga ketika $b diubah nilainya, maka $value juga akan berubah
 * 8. Sehingga ketika $a diubah nilainya, maka $value juga akan berubah
 * 9. Sehingga nilai dari $a dan $b adalah 200
 */