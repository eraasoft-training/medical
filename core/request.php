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