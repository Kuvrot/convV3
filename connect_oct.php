<?php
$oct_servername = "localhost";
$oct_username = "root";
$oct_dbname = "oct_db";
$oct_password = "superman";

try {
  $conn_oct = new PDO("mysql:host=$oct_servername;dbname=$oct_dbname", $oct_username, $oct_password);
  // set the PDO error mode to exception
  $conn_oct->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 