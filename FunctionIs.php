<?php

// https://www.php.net/manual/en/ref.var.php

// $data = "Naufal Fadhil Athallah";
$data = 100;

var_dump("is_string", is_string($data)); // bool(true)
var_dump("is_int", is_int($data)); // bool(false)
var_dump("is_bool", is_bool($data)); // bool(false)
var_dump("is_float", is_float($data)); // bool(false)
var_dump("is_array", is_array($data)); // bool(false)
var_dump("is_object", is_object($data)); // bool(false)
var_dump("is_null", is_null($data)); // bool(false)
var_dump("is_numeric", is_numeric($data)); // bool(true)
var_dump("is_scalar", is_scalar($data)); // bool(true)
var_dump("is_callable", is_callable($data)); // bool(false)
var_dump("is_iterable", is_iterable($data)); // bool(false)
var_dump("is_resource", is_resource($data)); // bool(false)
var_dump("is_countable", is_countable($data)); // bool(false)
var_dump("is_double", is_double($data)); // bool(false)
var_dump("is_long", is_long($data)); // bool(false)
// var_dump("is_real", is_real($data)); // bool(false)
// var_dump("is_unicode", is_unicode($data)); // bool(false)
// var_dump("is_binary", is_binary($data)); // bool(false)
