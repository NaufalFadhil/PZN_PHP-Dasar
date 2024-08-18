<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

/**
 * Map Function with Callback
 * Berfungsi untuk memetakan setiap elemen dalam array ke dalam elemen baru
 */
$dataResult = array_map(fn($data) => $data * 2, $data);
var_dump($dataResult);
/**
 * Output:
 * array(10) {
 * [0]=> int(2)
 * [1]=> int(4)
 * [2]=> int(6)
 * [3]=> int(8)
 * [4]=> int(10)
 * [5]=> int(12)
 * [6]=> int(14)
 * [7]=> int(16)
 * [8]=> int(18)
 * [9]=> int(20)
 * }
 */

echo "==================== SORT ARRAY DESCENDING" . PHP_EOL;

// Sort Array Descending
rsort($data);
var_dump($data);

echo "==================== SORT ARRAY ASCENDING" . PHP_EOL;

// Sort Array Ascending
sort($data);
var_dump($data);

echo "==================== ARRAY KEYS" . PHP_EOL;

// Get the keys of an array
var_dump(array_keys($data));

echo "==================== ARRAY VALUES" . PHP_EOL;

// Get the values of an array
var_dump(array_values($data));

echo "==================== ASSOCIATIVE ARRAY KEYS" . PHP_EOL;

$person = [
  "first_name" => "Naufal",
  "middle_name" => "Fadhil",
  "last_name" => "Athallah",
];

// Get the keys of an associative array
var_dump(array_keys($person));

echo "==================== ASSOCIATIVE ARRAY VALUES" . PHP_EOL;

// Get the values of an associative array
var_dump(array_values($person));

echo "==================== ARRAY MERGE" . PHP_EOL;

// Merge Arrays
$data1 = [1, 2, 3];
$data2 = [4, 5, 6];
$dataResult = array_merge($data1, $data2);
var_dump($dataResult); // [1, 2, 3, 4, 5, 6]

echo "==================== ARRAY POP" . PHP_EOL;

// Pop the element from the end of the array
var_dump(array_pop($data1));
var_dump($data1); // [1, 2]

echo "==================== ARRAY PUSH" . PHP_EOL;

// Push the element to the end of the array
array_push($data1, 3);
var_dump($data1); // [1, 2, 3]

echo "==================== ARRAY SHIFT" . PHP_EOL;

// Shift the element from the beginning of the array
var_dump(array_shift($data1));
var_dump($data1); // [2, 3]

echo "==================== ARRAY UNSHIFT" . PHP_EOL;

// Unshift the element to the beginning of the array
array_unshift($data1, 1);
var_dump($data1); // [1, 2, 3]

echo "==================== ARRAY SLICE" . PHP_EOL;

// Slice the array
$dataResult = array_slice($data, 0, 3);
var_dump($dataResult); // [1, 2, 3]

echo "==================== ARRAY SPLICE" . PHP_EOL;

// Splice the array
$dataResult = array_splice($data, 0, 3);
var_dump($dataResult); // [1, 2, 3]

echo "==================== ARRAY COMBINE" . PHP_EOL;

// Combine Arrays
$data1 = ['first' => 1, 'second' => 2];
$data2 = ['third' => 3, 'fourth' => 4];
$dataResult = array_combine(array_keys($data1), array_values($data2));
var_dump($dataResult); // ['first' => 3, 'second' => 4]

echo "==================== ARRAY SUM" . PHP_EOL;

// Sum the array
var_dump(array_sum($data)); // 6

echo "==================== ARRAY PRODUCT" . PHP_EOL;

// Product the array
var_dump(array_product($data)); // 6

echo "==================== ARRAY FILTER" . PHP_EOL;

// Filter the array
$dataResult = array_filter($data, fn($value) => $value > 2);
var_dump($dataResult); // [3]

echo "==================== ARRAY MAP" . PHP_EOL;

// Map the array
$dataResult = array_map(fn($value) => $value * 2, $data);
var_dump($dataResult); // [2, 4, 6]

echo "==================== ARRAY REDUCE" . PHP_EOL;

// Reduce the array
$dataResult = array_reduce($data, fn($carry, $value) => $carry + $value);
var_dump($dataResult); // 6

echo "==================== ARRAY WALK" . PHP_EOL;

// Walk the array
array_walk($data, fn($value) => var_dump($value)); // 1, 2, 3

echo "==================== ARRAY WALK RECURSIVE" . PHP_EOL;

// Walk the array recursive
array_walk_recursive($data, fn($value) => var_dump($value)); // 1, 2, 3

echo "==================== ARRAY KEY EXISTS" . PHP_EOL;

// Check if the key exists in the array
var_dump(array_key_exists('first', $data1)); // true

echo "==================== ARRAY SEARCH" . PHP_EOL;

// Search the value in the array
var_dump(array_search(2, $data1)); // second

echo "==================== ARRAY IN ARRAY" . PHP_EOL;

// Check if the value exists in the array
var_dump(in_array(2, $data1)); // true

echo "==================== ARRAY UNIQUE" . PHP_EOL;

// Unique the array
$data = [1, 2, 3, 1, 2, 3];
var_dump(array_unique($data)); // [1, 2, 3]

echo "==================== ARRAY REVERSE" . PHP_EOL;

// Reverse the array
var_dump(array_reverse($data)); // [3, 2, 1, 3, 2, 1]

echo "==================== ARRAY COUNT VALUES" . PHP_EOL;

// Count the values in the array
var_dump(array_count_values($data)); // [1 => 2, 2 => 2, 3 => 2]

echo "==================== ARRAY COLUMN" . PHP_EOL;

// Get the column from the array
$data = [
  ['id' => 1, 'name' => 'Naufal'],
  ['id' => 2, 'name' => 'Fadhil'],
];
var_dump(array_column($data, 'name')); // ['Naufal', 'Fadhil']

echo "==================== ARRAY PAD" . PHP_EOL;

// Pad the array
var_dump(array_pad($data, 3, 0)); // [1, 2, 0]

echo "==================== ARRAY FLIP" . PHP_EOL;

// Flip the array
var_dump(array_flip($data)); // ['Naufal' => 1, 'Fadhil' => 2]

echo "==================== ARRAY CHUNK" . PHP_EOL;

// Chunk the array
var_dump(array_chunk($data, 1)); // [[1], [2]]

echo "==================== ARRAY FILL" . PHP_EOL;

// Fill the array
var_dump(array_fill(0, 3, 0)); // [0, 0, 0]

echo "==================== ARRAY INTERSECT" . PHP_EOL;

// Intersect the array
$data1 = [1, 2, 3];
$data2 = [2, 3, 4];
var_dump(array_intersect($data1, $data2)); // [2, 3]

echo "==================== ARRAY DIFF" . PHP_EOL;

// Diff the array
var_dump(array_diff($data1, $data2)); // [1]

echo "==================== ARRAY MERGE RECURSIVE" . PHP_EOL;

// Merge Recursive the array
$data1 = ['first' => 1, 'second' => ['third' => 3]];
$data2 = ['second' => ['fourth' => 4], 'fifth' => 5];
var_dump(array_merge_recursive($data1, $data2)); // ['first' => 1, 'second' => ['third' => 3, 'fourth' => 4], 'fifth' => 5]

echo "==================== ARRAY REPLACE" . PHP_EOL;

// Replace the array
$data1 = ['first' => 1, 'second' => 2];
$data2 = ['second' => 3];
var_dump(array_replace($data1, $data2)); // ['first' => 1, 'second' => 3]

echo "==================== ARRAY REPLACE RECURSIVE" . PHP_EOL;

// Replace Recursive the array
$data1 = ['first' => 1, 'second' => ['third' => 3]];
$data2 = ['second' => ['fourth' => 4], 'fifth' => 5];
var_dump(array_replace_recursive($data1, $data2)); // ['first' => 1, 'second' => ['third' => 3, 'fourth' => 4], 'fifth' => 5]

echo "==================== ARRAY RAND" . PHP_EOL;

// Rand the array
var_dump(array_rand($data)); // 0

echo "==================== ARRAY SHUFFLE" . PHP_EOL;

// Shuffle the array
shuffle($data);
var_dump($data);

/*
Output:

array(10) {
  [0]=>
  int(2)
  [1]=>
  int(4)
  [2]=>
  int(6)
  [3]=>
  int(8)
  [4]=>
  int(10)
  [5]=>
  int(12)
  [6]=>
  int(14)
  [7]=>
  int(16)
  [8]=>
  int(18)
  [9]=>
  int(20)
}
==================== SORT ARRAY DESCENDING
array(10) {
  [0]=>
  int(10)
  [1]=>
  int(9)
  [2]=>
  int(8)
  [3]=>
  int(7)
  [4]=>
  int(6)
  [5]=>
  int(5)
  [6]=>
  int(4)
  [7]=>
  int(3)
  [8]=>
  int(2)
  [9]=>
  int(1)
}
==================== SORT ARRAY ASCENDING
array(10) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
  [5]=>
  int(6)
  [6]=>
  int(7)
  [7]=>
  int(8)
  [8]=>
  int(9)
  [9]=>
  int(10)
}
==================== ARRAY KEYS
array(10) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(2)
  [3]=>
  int(3)
  [4]=>
  int(4)
  [5]=>
  int(5)
  [6]=>
  int(6)
  [7]=>
  int(7)
  [8]=>
  int(8)
  [9]=>
  int(9)
}
==================== ARRAY VALUES
array(10) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
  [5]=>
  int(6)
  [6]=>
  int(7)
  [7]=>
  int(8)
  [8]=>
  int(9)
  [9]=>
  int(10)
}
==================== ASSOCIATIVE ARRAY KEYS
array(3) {
  [0]=>
  string(10) "first_name"
  [1]=>
  string(11) "middle_name"
  [2]=>
  string(9) "last_name"
}
==================== ASSOCIATIVE ARRAY VALUES
array(3) {
  [0]=>
  string(6) "Naufal"
  [1]=>
  string(6) "Fadhil"
  [2]=>
  string(8) "Athallah"
}
==================== ARRAY MERGE
array(6) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
  [5]=>
  int(6)
}
==================== ARRAY POP
int(3)
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}
==================== ARRAY PUSH
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
==================== ARRAY SHIFT
int(1)
array(2) {
  [0]=>
  int(2)
  [1]=>
  int(3)
}
==================== ARRAY UNSHIFT
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
==================== ARRAY SLICE
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
==================== ARRAY SPLICE
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
==================== ARRAY COMBINE
array(2) {
  ["first"]=>
  int(3)
  ["second"]=>
  int(4)
}
==================== ARRAY SUM
int(49)
==================== ARRAY PRODUCT
int(604800)
==================== ARRAY FILTER
array(7) {
  [0]=>
  int(4)
  [1]=>
  int(5)
  [2]=>
  int(6)
  [3]=>
  int(7)
  [4]=>
  int(8)
  [5]=>
  int(9)
  [6]=>
  int(10)
}
==================== ARRAY MAP
array(7) {
  [0]=>
  int(8)
  [1]=>
  int(10)
  [2]=>
  int(12)
  [3]=>
  int(14)
  [4]=>
  int(16)
  [5]=>
  int(18)
  [6]=>
  int(20)
}
==================== ARRAY REDUCE
int(49)
==================== ARRAY WALK
int(4)
int(5)
int(6)
int(7)
int(8)
int(9)
int(10)
==================== ARRAY WALK RECURSIVE
int(4)
int(5)
int(6)
int(7)
int(8)
int(9)
int(10)
==================== ARRAY KEY EXISTS
bool(true)
==================== ARRAY SEARCH
string(6) "second"
==================== ARRAY IN ARRAY
bool(true)
==================== ARRAY UNIQUE
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
==================== ARRAY REVERSE
array(6) {
  [0]=>
  int(3)
  [1]=>
  int(2)
  [2]=>
  int(1)
  [3]=>
  int(3)
  [4]=>
  int(2)
  [5]=>
  int(1)
}
==================== ARRAY COUNT VALUES
array(3) {
  [1]=>
  int(2)
  [2]=>
  int(2)
  [3]=>
  int(2)
}
==================== ARRAY COLUMN
array(2) {
  [0]=>
  string(6) "Naufal"
  [1]=>
  string(6) "Fadhil"
}
==================== ARRAY PAD
array(3) {
  [0]=>
  array(2) {
    ["id"]=>
    int(1)
    ["name"]=>
    string(6) "Naufal"
  }
  [1]=>
  array(2) {
    ["id"]=>
    int(2)
    ["name"]=>
    string(6) "Fadhil"
  }
  [2]=>
  int(0)
}
==================== ARRAY FLIP

Warning: array_flip(): Can only flip string and integer values, entry skipped in /Users/nata/Development/PZN/belajar-pemrograman-php/1-php-dasar/FunctionArray.php on line 203

Warning: array_flip(): Can only flip string and integer values, entry skipped in /Users/nata/Development/PZN/belajar-pemrograman-php/1-php-dasar/FunctionArray.php on line 203
array(0) {
}
==================== ARRAY CHUNK
array(2) {
  [0]=>
  array(1) {
    [0]=>
    array(2) {
      ["id"]=>
      int(1)
      ["name"]=>
      string(6) "Naufal"
    }
  }
  [1]=>
  array(1) {
    [0]=>
    array(2) {
      ["id"]=>
      int(2)
      ["name"]=>
      string(6) "Fadhil"
    }
  }
}
==================== ARRAY FILL
array(3) {
  [0]=>
  int(0)
  [1]=>
  int(0)
  [2]=>
  int(0)
}
==================== ARRAY INTERSECT
array(2) {
  [1]=>
  int(2)
  [2]=>
  int(3)
}
==================== ARRAY DIFF
array(1) {
  [0]=>
  int(1)
}
==================== ARRAY MERGE RECURSIVE
array(3) {
  ["first"]=>
  int(1)
  ["second"]=>
  array(2) {
    ["third"]=>
    int(3)
    ["fourth"]=>
    int(4)
  }
  ["fifth"]=>
  int(5)
}
==================== ARRAY REPLACE
array(2) {
  ["first"]=>
  int(1)
  ["second"]=>
  int(3)
}
==================== ARRAY REPLACE RECURSIVE
array(3) {
  ["first"]=>
  int(1)
  ["second"]=>
  array(2) {
    ["third"]=>
    int(3)
    ["fourth"]=>
    int(4)
  }
  ["fifth"]=>
  int(5)
}
==================== ARRAY RAND
int(1)
==================== ARRAY SHUFFLE
array(2) {
  [0]=>
  array(2) {
    ["id"]=>
    int(1)
    ["name"]=>
    string(6) "Naufal"
  }
  [1]=>
  array(2) {
    ["id"]=>
    int(2)
    ["name"]=>
    string(6) "Fadhil"
  }
}
  
*/
