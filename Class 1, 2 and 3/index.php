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




    <?php
            $a = 10;
            $b = 3;
             echo "<br>";
            echo $a + $b;   // 13
             echo "<br>";
            echo $a % $b;   // 1

            $score = 85;
             echo "<br>";

            if ($score >= 60) {
                echo "Passed";
            } else {
                echo "Failed";
            }



             echo "<br>";


            $status = ($score >= 60) ? "Pass" : "Fail";
            echo $status;   // Pass


            
            echo "<br>";
            $name = $_GET['user'] ?? "Guest";  // null coalescing
            echo $name;
    ?>




    <?php
            $grade = 85;

            if ($grade >= 90) {
                echo "A";
            } elseif ($grade >= 80) {
                echo "B";
            } elseif ($grade >= 70) {
                echo "C";
            } else {
                echo "D or F";
            }

            $day = "Monday";
            switch ($day) {
                case "Monday":
                    echo "Start of week";
                    break;
                case "Friday":
                    echo "Weekend soon";
                    break;
                default:
                    echo "Midweek";
            }
?>
</body>
</html>