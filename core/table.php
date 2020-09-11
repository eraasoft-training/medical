<?php 

function typeCount()
{
  static $i = 1; 
  echo $i;
  $i++;
}