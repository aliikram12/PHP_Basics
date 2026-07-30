<?php
    include "db.php";

    if($_POST){
        $name = $_POST['name'];
        $email = $_POST['email'];

        mysqli_query($conn, "INSERT INTO users(name, email) VALUE('$name', '$email')");

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Submit Data To Database</h1>


    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name = "name" require>

        <br><br>

        <label for="email">Email:</label>
        <input type="email" name = "email" require>


        <br><br>

        <input type="submit">
    </form>
</body>
</html>