<?php

var_dump(10 == "10"); // bool(true) | 10
var_dump(10 === "10"); // bool(false) | (empty)

var_dump(10 <> "10"); // bool(false) | (empty)
var_dump(10 != "10"); // bool(false) | (empty)
var_dump(10 !== "10"); // bool(true) | 10

var_dump(10 < 10); // bool(false) | (empty)
var_dump(10 <= 10); // bool(true) | 10

var_dump(10 > 10); // bool(false) | (empty)
var_dump(10 >= 10); // bool(true) | 10
