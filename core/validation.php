<?php 

$success = "";
$errors = [];

function isRequired($input): bool
{
  return (! empty($input));
}

function isString($input): bool
{
  return is_string($input);
}

function isEmail($input): bool
{
  return filter_var($input, FILTER_VALIDATE_EMAIL);
}

function isNotMoreThan($input, int $maxLength): bool
{
  $length = strlen($input);

  return ($length <= $maxLength);
}

function getError(string $key) 
{
  global $errors;

  if(isset($errors[$key])) 
    echo "<span class='text-danger'>(" . $errors[$key] . ")</span>";
}