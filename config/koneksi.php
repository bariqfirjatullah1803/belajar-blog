<?php

$servername = 'localhost';
$username = 'bariq';
$password = 'aku089619';
$dbname = 'blog';

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek Koneksi
if (!$conn) {
  die('Koneksi gagal' . mysqli_connect_error());
}

function getAll($table)
{
  global $conn;
  $query = 'SELECT * FROM ' . $table;
  $result = mysqli_query($conn, $query);
  return $result;
}
function getById($table, $where)
{
  global $conn;
  $query = "SELECT * FROM {$table} WHERE {$where}";
  return $result = mysqli_query($conn, $query);
}
