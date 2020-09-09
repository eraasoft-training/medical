<?php 

$conn = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

function getOne(string $table, string $where)
{
  global $conn;

  $sql = "SELECT * FROM $table where $where LIMIT 1";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    return $row;
  } else {
    return [];
  }
}