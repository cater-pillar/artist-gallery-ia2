<?php

$servername = "localhost";
$username = "root";
$password = "steva";
$dbname = "ia2";

try {
    $conn = new PDO("mysql:host=$servername;charset=utf8;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
};


