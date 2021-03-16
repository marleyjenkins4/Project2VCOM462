<?php

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    
    echo "here are the variables $user+$pass+$fname $lname $email .";

    $link = mysqli_connect("localhost","u792692359_hiker","Hiker123","u792692359_Hyke") or die("connection error");


    $sql = "INSERT INTO Users(username, password, firstname, lastname, email) VALUES ('{$user}', '{$pass}', '{$fname}', '{$lname}', '{$email}')";
    if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    //header("Location: login.html");
?>