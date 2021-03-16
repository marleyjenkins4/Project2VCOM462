<?php

    $user = $_POST['userid'];
    $time = $_POST['time'];
    $miles = $_POST['miles'];
    $altitude = $_POST['altitude'];
    

    $link = mysqli_connect("localhost","u792692359_hiker","Hiker123","u792692359_Hyke") or die("connection error");


    $sql = "INSERT INTO Hikes(userid, time, miles, altitude) VALUES ('{$user}', '{$time}', '{$miles}', '{$altitude}')";
    if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    header("Location: index.html");
?>