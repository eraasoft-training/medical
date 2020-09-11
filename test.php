<?php

require_once 'app.php';

$data = [
  'name' => 'ahmed',
  'age' => '75',
  'len' => '75',
  'wid' => '75',
];

update("users", $data);