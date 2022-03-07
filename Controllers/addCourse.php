<?php

include("../Database/connect.php");
include("../Models/course.php");
session_start();

$cName = $_POST['cName'];
$cProfessor = $_POST['cProfessor'];
$cType = $_POST['cType'];
$cStart_hour = $_POST['cStart_hour'];
$cDuration = $_POST['cDuration'];
$cDay = $_POST['cDay'];
$userID = $_SESSION['userID'];

$sql = "INSERT INTO courses (userID,name, professor, type, begin_hour, time, day) VALUES ('$userID','$cName', '$cProfessor', '$cType', '$cStart_hour', '$cDuration', '$cDay')";

if($conn -> query($sql) ===TRUE){
    header("location: ../index.php");
}else{
    echo("We have a problem...: " + $conn->error);
}
