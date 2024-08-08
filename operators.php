<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operators</title>
</head>
<body>
    <center>
        <?php
        //spaceship operator
        //space ship operator has 3 outputs and they are  -1, 0, +1
        //you get -1 when a < b and you get 0 when a = 0 and you get +1 when a > b 
        $a = 50;
        $b = 40;
        echo ($a <=> $b); 


        //conditional operator
        $str = 20 > 10 ? "first number is greater" :  "second number is greater";
        echo "<br>".$str;
        ?>

    </center>
</body>
</html>