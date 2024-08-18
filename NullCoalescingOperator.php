<?php

$data = [
  'action' => 'create'
];

if (isset($data['action'])) {
  $action = $data['action'];
} else {
  $action = 'nothing';
}

echo $action . PHP_EOL; // create

// Menggunakan Null Coalescing Operator

$action = $data['action'] ?? 'nothing';
echo $action . PHP_EOL; // create