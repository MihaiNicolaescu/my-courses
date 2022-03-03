<?php

include("../Database/connect.php");
include("../Models/course.php");


$cName = $_POST['cName'];
$cProfessor = $_POST['cProfessor'];
$cType = $_POST['cType'];
$cStart_hour = $_POST['cStart_hour'];
$cDuration = $_POST['cDuration'];
$cDay = $_POST['cDay'];

$sql = "INSERT INTO courses (name, professor, type, begin_hour, time, day) VALUES ('$cName', '$cProfessor', '$cType', '$cStart_hour', '$cDuration', '$cDay')";

if($conn -> query($sql) ===TRUE){
    header("location: ../pages/index.php");
}else{
    echo("We have a problem...: " + $conn->error);
}
