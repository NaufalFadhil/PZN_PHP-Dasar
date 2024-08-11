<?php

var_dump(true && true); // bool(true)
var_dump(true && false); // bool(false)

var_dump(true || true); // bool(true)
var_dump(true || false); // bool(true)

var_dump(!true); // bool(false)
var_dump(!false); // bool(true)

var_dump(true xor true); // bool(false)
var_dump(true xor false); // bool(true)
var_dump(false xor true); // bool(true)
var_dump(false xor false); // bool(false)
