<?php

// Kode: Tanpa Menggunakan Foreach
$names = ["Naufal", "Fadhil", "Athallah"];

for ($i = 0; $i < count($names); $i++) {
  echo "Data ke-$i = $names[$i]" . PHP_EOL;
}

echo "====================" . PHP_EOL;

// Kode: Menggunakan Foreach
foreach ($names as $name) {
  echo "Data $name" . PHP_EOL;
}

echo "====================" . PHP_EOL;

// Kode: Menggunakan Foreach dengan Key Index
foreach ($names as $index => $name) {
  echo "Data ke-$index = $name" . PHP_EOL;
}

echo "====================" . PHP_EOL;

// Kode: Menggunakan Foreach pada Associative Array (Key-Value Pair)
$person = [
  "first_name" => "Naufal",
  "middle_name" => "Fadhil",
  "last_name" => "Athallah"
];

foreach ($person as $key => $value) {
  echo "$key : $value" . PHP_EOL;
}
