<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data types</title>
</head>
<body>

<center>
    <?php
    
    class Test {

    }
    
    echo " hi there <br>";

    $a = 100;//int
    echo $a."<br>";

    $b = 23.34;//float
    echo $b."<br>";

    $c = "hello world";// string
    echo $c."<br>";

    $d = TRUE; //boolean, true gives 1 and false give no output not even null
    echo $d."<br>";

    $ar = array("indore", "pune", "mumbai"); //array
    print_r($ar);


    if ($a > $b) {
        echo "<br> greater number is ".$a;
    } else {
        echo "<br> greater number is ".$b;
    }
    
    echo "<br>".(10 + 10);

    // t = new Test();
    ?>
</center>
    
</body>
</html>