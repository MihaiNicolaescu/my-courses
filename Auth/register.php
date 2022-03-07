<?php 
    include("../Database/connect.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $university = $_POST['university'];
    $specialization = $_POST['specialization'];
    $year = $_POST['year'];
    $password_H = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password, fName, lName, university, specialization, year) values ('$email', '$password_H', '$fName', '$lName', '$university', '$specialization', '$year')";
    if($conn -> query($sql) === TRUE){
        header("location: ../pages/login.html");
    }else{
        echo("Error: {$sql}, message: {$conn->error}");
    }
    $conn->close();
