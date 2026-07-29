<?php

    if($_POST){
        $name = $_POST['name'];
        $email = $_POST['email'];


        echo "Form submitted successfully!<br>";
        // echo "Welcome, " . $name . "<br>";
        // echo "Email: " . $email . "<br>";
        echo "<a href='main.html'>Go back to the form</a>";

    }else{
        echo "Please submit the form.";
        echo "<a href='main.html'>Go back to the form</a>";
    }


?>