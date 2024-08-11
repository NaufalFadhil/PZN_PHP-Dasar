<?php

// Expression
// Expression adalah konstruksi kode yg menghasilkan nilai

// Expression Sederhana
$a = 5;
$b = $a;

// Expression Complex
function getValue()
{
	return 100;
}

$value = getValue();
// Setiap function call yg mengembalikan nilai adalah expression

// ========================================

// Statement
// Statement adalah instruksi yg diakhiri dengan semicolon (;)
$name = "Naufal Fadhil Athallah"; // Ini adalah stetement

echo $name; // Ini adalah stetement

$date = new DateTime(); // Ini adalah stetement
echo $date->format('Y-m-d H:i:s'); // Ini adalah stetement

// ========================================

// Block
// Block adalah kumpulan statement yg diapit oleh kurung kurawal ({})
function runApp($name)
{
	echo "Start Program" . PHP_EOL; // Statement yg ada di dalam block
}