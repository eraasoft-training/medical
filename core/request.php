<?php 

function prepareInput(string $input): string  
{
  return trim(htmlspecialchars($input));
}