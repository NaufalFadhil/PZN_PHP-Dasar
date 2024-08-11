<?php

$total = 0;

$fruit = 10_000;
$chicken = 25_000;
$orangeJuice = 5_000;

$total = $total + $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total); // int(40000)
