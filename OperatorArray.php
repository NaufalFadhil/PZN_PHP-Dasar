<?php

$first = [
  "first_name" => "Naufal"
];

$last = [
  "first_name" => "Naufal", // Ini akan diabaikan
  "middle_name" => "Fadhil",
  "last_name" => "Athallah"
];

$full = $first + $last;
var_dump($full);
/**
 * array(3) {
 *   ["first_name"]=> string(6) "Naufal"
 *   ["middle_name"]=> string(6) "Fadhil"
 *   ["last_name"]=> string(8) "Athallah"
 * }
 */

var_dump($first == $last); // bool(false)
var_dump($first === $last); // bool(false)
