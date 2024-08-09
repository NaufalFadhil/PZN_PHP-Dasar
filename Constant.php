<?php

define('AUTHOR', 'Naufal Fadhil Athallah');
define('APP_VERSION', 1.0);

echo "Author : " . AUTHOR . "\n"; // Author : Naufal Fadhil Athallah
echo "App Version : " . APP_VERSION . "\n"; // App Version : 1.0

// Warning: Constant APP_VERSION already defined 
// define('APP_VERSION', 2.0); 

const APP_VERSION_2 = 2.0;
echo "App Version 2 : " . APP_VERSION_2 . "\n"; // App Version 2 : 2.0

// Can't change the value of constant
// APP_VERSION_2 = 3.0; // Fatal error: Cannot redeclare APP_VERSION_2 