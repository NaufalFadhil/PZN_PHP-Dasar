<?php

// Post-increment
$a = 10;

$a++; // 11
$a++; // 12
/**
 * Mirip dengan
 * $a = $a + 1; // 11
 * $a += 1; // 12
 */

var_dump($a); // int(12)


// Pre-increment
$b = 10;

$c = $b++;
/**
 * $c = $b; // $c = 10
 * $b = $b + 1; // $b = 11
 */

var_dump($b); // int(11)
var_dump($c); // int(10)
