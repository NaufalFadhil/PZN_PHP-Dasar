<?php

// Global Variable
$ini_global_variable = "Ini Global Variable";

function myFunction() {
    // Local Variable
    $ini_local_variable = "Ini Local Variable";

    // Get Local Variable
    echo $ini_local_variable . PHP_EOL;

    // Get Global Variable
    // echo $ini_global_variable . PHP_EOL; // Error karena variabel global tidak bisa diakses di dalam function
    
    // Get Global Variable with Global Keyword
    global $ini_global_variable;
    echo $ini_global_variable . PHP_EOL; // Ini Global Variable

    // Get Global Variable with $GLOBALS
    echo $GLOBALS["ini_global_variable"] . PHP_EOL;
    // var_dump($GLOBALS); Defaultnya array yang berisi variabel global
}

myFunction();

// Static Variable (Variable yang nilainya akan tetap meskipun function dijalankan berkali-kali)
function increment() {
    static $counter = 1;
    echo "Counter = $counter" . PHP_EOL;
    $counter *= 2;
}

increment(); // Counter = 1
increment(); // Counter = 2
increment(); // Counter = 4
increment(); // Counter = 8
increment(); // Counter = 16