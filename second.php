<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <!-- center is used to place all thing in center -->
    <center> 
    <?php
       echo "Welcome in php";
       print("<br> this is my php certification");

       $a = 100;
       echo "<br> value is ".$a;// " . " operator is used to combine variable and string  like in javascript we write , or in java we write "+" 

       $b = 50;
       $c = $a + $b;
       echo "<br> sum of ".$a." and ".$b." is equal to ".$c
    ?>
    </center>
    
</body>
</html>