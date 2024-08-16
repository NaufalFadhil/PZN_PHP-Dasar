<?php

$valueStrong = "100";
$valueInt = (int) $valueStrong;

var_dump($valueStrong); // string(3) "100"
var_dump($valueInt); // int(100)

$valueString = "10.5";
$valueFloat = (float) $valueString;

var_dump($valueString); // string(4) "10.5"
var_dump($valueFloat); // float(10.5)