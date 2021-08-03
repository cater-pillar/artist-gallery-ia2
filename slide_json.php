<?php

$mysqli = new mysqli('localhost', 'root', '', 'ia2');

    if($mysqli -> connect_errno) {
        echo 'Failed to connect to MySQL' . $mysqli -> connect_error;
    };

$mysqli -> set_charset("utf8mb4");


$query_slide = 'SELECT * FROM `project_slide`';

    $result_slide = $mysqli -> query($query_slide) -> fetch_all();

    echo json_encode($result_slide);
    ?>