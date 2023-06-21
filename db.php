<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = "simon";
try {
  $conn = new mysqli($servername, $username, $password, $dbname);
} catch (mysqli_sql_exception $e) {
  die("Conexión fallida: " . $e->getMessage());
}

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>
