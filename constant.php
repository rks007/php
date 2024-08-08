<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant</title>
</head>
<body>
    <center>
        <?php
        //if you want to declare variables then you use $
        $a = 50;
        echo $a."<br>";
        //you can change it later
        $a = 45; 
        echo $a."<br>";

        //how to declare constants like const in javascript
        define('pi', 3.14);
        echo pi." is a constant <br>"
        ?>
    </center>
</body>
</html>