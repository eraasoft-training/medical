<?php 

function prepareInput(string $input): string  
{
  return trim(htmlspecialchars($input));
}

// redirect your-url/your-path 
function redirect(string $path)
{
  header("location:" . URL . "$path");
}

// redirect your-url/admin/your-path 
function aredirect(string $path)
{
  header("location:" . AURL . "$path");
}

function abort()
{
  header("location:" . AURL . "404.php");
}