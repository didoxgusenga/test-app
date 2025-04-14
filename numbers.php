<!DOCTYPE html>
<html>
<head>
    <title>numbers.php</title>
</head>
<body>

    <?php

        $myVariable = 40;
        $myVariable++;
        echo "After increment: " . $myVariable . "<br>";
        $myVariable--;
        echo "After decrement: " . $myVariable . "<br>";

        $max = max($myVariable, 100); //compare $myVariable with 100
        echo "Maximum value between current variable and 100 is: " . $max . "<br>";

        $min = min($myVariable, 10); 
        echo "Minimum value between current variable and 10 is: " . $min . "<br>";

    ?>

</body>
</html>