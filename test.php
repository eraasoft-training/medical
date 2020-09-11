<?php

require_once 'app.php';


$_SESSION['name'] = 'kareem';

print_r($_SESSION);

session_destroy();

print_r($_SESSION);