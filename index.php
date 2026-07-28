<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Wellcome</h1>

    <?php
        echo "Wellcome From PHP :";

        $a = "ABC <br>"; 
        echo $a;

            // Variables:
            $city = "SGD"; //Globle 
        
    
            function showCity() {
                $city1 = "Lahore";  //Local 
                echo $city1;
            }




            $text = "Hello";
            $num = 10;
            $price = 9.99;
            $isValid = true;
            $colors = ["red", "green"];
            $empty = null;

            var_dump($text);   // string(5) "Hello"

            echo $text;
            echo "<br>";
            var_dump($num);    // int(10)
            echo "<br>";
            var_dump($price);  // float(9.99)
            echo "<br>";
            var_dump($isValid);// bool(true)
            echo "<br>";
            var_dump($colors); // array(2) { ... }
            echo "<br>";
            var_dump($empty);  // NULL





            $fname = "ALI";

            $lname = "ikram";
            echo "<br>";

            echo $fname." ". $lname;
            
        
    ?>
</body>
</html>