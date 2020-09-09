<?php

require_once 'app.php';


// echo isRequired('he');

$email = "kareem@erasoft.com";
getOne('admins', "admin_email = '$email'");