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


$query_slide = 'SELECT * FROM `project_slide`';

    $result_slide = $conn -> prepare($query_slide);
    $result_slide->execute();
    $slide = $result_slide->fetchAll();

    echo json_encode($slide);

