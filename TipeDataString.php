<?php

// Single Quote
echo 'Hello World!'; // Hello World!%
echo 'Hello World!' . PHP_EOL; // PHP_EOL = End Of Line // Hello World!

echo 'Nama: ';
echo 'Naufal Fadhil Athallah';
// Nama: Naufal Fadhil Athallah

echo '\n';

// Double Quote
echo 'Nama: ';
echo "Naufal Fadhil Athallah";
echo "\n";
// Nama: Naufal Fadhil Athallah

echo "Nama: "; 
echo "Naufal\t Fadhil\t Athallah\n"; // \t = tab
// Nama: Naufal	 Fadhil	 Athallah

// Multiline String - Heredoc
echo <<<TAGBEBAS
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga loh!
TAGBEBAS;

// Multiline String - Nowdoc
echo <<<'TAGBEBAS2'
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga loh!
TAGBEBAS2;
