<?php

echo "Integer Normal 32 Bit: ";
var_dump(2147483647); // int(2147483647)

echo "Integer Overlow 32 Bit: ";
var_dump(2147483648); // float(2.147483648E+9)

echo "Integer Normal 62 Bit: ";
var_dump(9223372036854775807); // int(9223372036854775807)

echo "Integer Overlow 62 Bit: ";
var_dump(9223372036854775808); // float(9.223372036854776E+18)
