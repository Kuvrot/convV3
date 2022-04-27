<?php
$hex_servername = "localhost";
$hex_username = "root";
$hex_dbname = "hex_db";
$hex_password = "superman";

try {
  $conn_hex = new PDO("mysql:host=$hex_servername;dbname=$hex_dbname", $hex_username, $hex_password);
  // set the PDO error mode to exception
  $conn_hex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 