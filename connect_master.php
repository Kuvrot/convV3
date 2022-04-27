<?php

while (true){

    sleep(10);

    $l_bin = "";
    $l_hex = "";
    $l_oct = 0;

$master_servername = "localhost";
$master_username = "root";
$master_dbname = "master_db";
$master_password = "superman";

try {
  $conn_master = new PDO("mysql:host=$master_servername;dbname=$master_dbname", $master_username, $master_password);
  // set the PDO error mode to exception
  $conn_master->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



  
include 'connect_bin.php';
include 'connect_hex.php';
include 'connect_oct.php';

$sql_stmt = "SELECT v_converted FROM conversions ORDER BY id DESC LIMIT 1";
$n_stmt_bin = $conn_bin->query($sql_stmt);

if ($row = $n_stmt_bin->fetch()){

      $l_bin = $row['v_converted'];  

}

$sql_stmt = "SELECT v_converted FROM conversions ORDER BY id DESC LIMIT 1";
$n_stmt_hex = $conn_hex->query($sql_stmt);

if ($row = $n_stmt_hex->fetch()){

      $l_hex = $row['v_converted'];  

}

$sql_stmt = "SELECT v_converted FROM conversions ORDER BY id DESC LIMIT 1";
$n_stmt_oct = $conn_oct->query($sql_stmt);

if ($row = $n_stmt_oct->fetch()){

      $l_oct = $row['v_converted'];  

}

    $master_stmt = $conn_master->prepare("INSERT INTO conversions (bin , hex , oct) VALUES (:b , :h , :o)");
    $master_stmt->execute([

        ':b' => $l_bin,
        ':h' => $l_hex,
        ':o' => $l_oct
    ]);



}

?> 