<?php 

require_once "globals.php";
require_once "env.php";

$files = glob(CORE . "*.php");
foreach ($files as $file) {
  require_once $file;
}