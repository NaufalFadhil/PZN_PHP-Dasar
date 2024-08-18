<?php

// require "Library/MyFunction.php";
// include "Library/MyFunction.php";

// Error Require
// require "Library/MyFunctionError.php";
// Error karena require akan menghentikan eksekusi program jika file yang di-require tidak ditemukan

// Require Once dan Include Once akan memastikan file yang di-require hanya di-include satu kali
require_once "Library/MyFunction.php";
require_once "Library/MyFunction.php";

include_once "Library/MyFunction.php";
include_once "Library/MyFunction.php";

echo sayHello("Naufal", "Fadhil"); // Hello Naufal Fadhil