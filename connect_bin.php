<?php
$bin_servername = "localhost";
$bin_username = "root";
$bin_dbname = "bin_db";
$bin_password = "superman";

try {
  $conn_bin = new PDO("mysql:host=$bin_servername;dbname=$bin_dbname", $bin_username, $bin_password);
  // set the PDO error mode to exception
  $conn_bin->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 