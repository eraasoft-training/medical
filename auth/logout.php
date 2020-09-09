<?php 

require_once '../app.php';


if(isset($_POST['logout']))
{
  // destroy session
  session_destroy();
  
  redirect("auth/login.php");
}