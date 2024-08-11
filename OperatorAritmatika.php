<?php

$result = 10 + 10;
var_dump($result); // int(20)

$a = 10;
$b = 10;
$result = $a + $b;
var_dump($result); // int(20)

$resultNegative = -$result;
var_dump($resultNegative); // int(-20)

$resultPositive = +$result;
var_dump($resultPositive); // int(20)

$resultModulo = 100 % 3;
var_dump($resultModulo); // int(1)
