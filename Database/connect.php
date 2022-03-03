<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "my_courses_DB";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn ->connect_error){
        die("Connection to database failed. Error message: " . $conn->connect_error);
    }
?>