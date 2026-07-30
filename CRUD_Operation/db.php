<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "abc";


    $conn = mysqli_connect( $host, $user, $password, $db );

    if(!$conn){
        die("DB Connection Issue " . mysqli_connect_error());
    }
    // else{
    //     die("Connected To DB Successfuly");
    // }



?>