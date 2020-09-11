<?php 

$conn = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// get one row by id
function getOne(string $table, string $where)
{
  global $conn;

  $sql = "SELECT * FROM $table WHERE $where LIMIT 1";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    return $row;
  } else {
    return [];
  }
}

// get all rows 
function getAll(string $table): array 
{
  global $conn;

  $sql = "SELECT * FROM $table";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
  } else {
    return [];
  }
}

function insert(string $table, array $data): bool
{
  global $conn;
  $keys = '';
  $values = '';

  foreach ($data as $key => $value) {
    $keys .= "$key,";
    $values .= "'$value',";
  }

  $keys = rtrim($keys, ",");
  $values = rtrim($values, ",");

  // $keys = array_keys($data);
  // $values = array_values($data);
  // $keys = implode(",", $keys);
  // $values = "'" . implode("','", $values) . "'";

  $sql = "INSERT INTO $table ($keys) VALUES ($values) ";

  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}

function update(string $table, array $data, string $where): bool
{
  global $conn;
  
  $set = '';
  foreach ($data as $key => $value) {
   $set .= "$key = '$value',";
  }

  $set = rtrim($set, ",");

  $sql = "UPDATE $table SET $set WHERE $where";
  
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}