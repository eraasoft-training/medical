<?php 

session_start();

function setSession(string $key, $value)
{
  $_SESSION[$key] = $value;
}

function getSession(string $key)
{
  return $_SESSION[$key];
}