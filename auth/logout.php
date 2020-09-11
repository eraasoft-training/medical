<?php 

require_once '../app.php';


if(isset($_POST['logout']))
{
  // destroy session
  endSession();
  
  redirect("auth/login.php");
}