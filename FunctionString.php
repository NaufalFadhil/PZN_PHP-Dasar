<?php

// Array to String
var_dump(join(",", [10, 11, 12, 13, 14])); // string(11) "10,11,12,13,14"

// String to Array
var_dump(explode(",", "10,11,12,13,14")); 
/**
 * Output:
 * array(5) {
 * [0]=> string(2) "10"
 * [1]=> string(2) "11"
 * [2]=> string(2) "12"
 * [3]=> string(2) "13"
 * [4]=> string(2) "14"
 * }
 */

// String to Lowercase
var_dump(strtolower("Naufal Fadhil Athallah")); // string(23) "naufal fadhil athallah"

// String to Uppercase
var_dump(strtoupper("Naufal Fadhil Athallah")); // string(23) "NAUFAL FADHIL ATHALLAH"

// Remove Whitespace from the Beginning and End of a String
var_dump(trim("     Naufal Fadhil Athallah      ")); // string(23) "Naufal Fadhil Athallah"

// Get some part of the string
var_dump(substr("Naufal Fadhil Athallah", 7, 6)); // string(6) "Fadhil"