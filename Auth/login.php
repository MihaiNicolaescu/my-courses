<?php 

    include("../Database/connect.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_db;
    $fName;
    $lName;
    $university;
    $specialization;
    $year;
    $userID;

    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $fName = $row['fName'];
            $password_db = $row['password'];
            $lName = $row['lName'];
            $university = $row['university'];
            $specialization = $row['specialization'];
            $year = $row['year'];
            $userID = $row['id'];
        }
        if(password_verify($password, $password_db)){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['fName'] = $fName;
            $_SESSION['lName'] = $lName;
            $_SESSION['university'] = $university;
            $_SESSION['specialization'] = $specialization;
            $_SESSION['year'] = $year;
            $_SESSION['isConnected'] = true;
            $_SESSION['userID'] = $userID;
            $conn->close();
            echo("Connected!");
            header("location: ../index.php");
        }else echo "Invalid password";
    
    }else echo "Invalid email or password";

