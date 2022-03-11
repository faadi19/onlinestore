<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            echo "Rlational Operator ";
            echo $a = 4;
            echo $b = 5;
            echo $a == $b;
            echo"<br>";
            echo $a > $b;
            echo"<br>";
            echo $a < $b;
            echo"<br>";
            echo $a >= $b;
            echo"<br>";
            echo $a <= $b;
            echo"<br>";
            echo $a != $b;
            echo"<br>";
            echo $a <> $b;
            echo"<h1>Logical Operator </h1>";
            echo $a == 4 && $b == 5;
            echo"<br>";
            echo $a == 4 || $b == 5;
            echo"<br>";
            echo !($a == 4 || $b == 5);
            echo"<br>";
            echo"<h1>Bitwise Operator </h1>";
            echo $a & $b;
            echo"<br>";
            echo $a | $b;
            echo"<br>";
            echo $a ^ $b;
            echo"<br>";
            echo $a >> $b;
            echo"<br>";
            echo $a << $b;
            echo"<br>";
            echo"<h1>Special Operator </h1>";
            $age = 19;
            $category = ($age < 16) ? "Child" : "Adult";
            echo"<br>";
            echo $category;

    ?>
</body>
</html>