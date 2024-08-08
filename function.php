<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <center>
        <?php
        function display($a, $b){
            return $a + $b;
        } 
        $c = display(5, 6);
        echo $c;

        echo "<br>";

        //now there is concept of var args which is,  when you dont know the number of parameters to be passed
        function display2(...$a){
            foreach($a as $m){
                echo "<br>".$m;
            }
        } 
        echo "calling display 2 for first time";
        display2(20, 30, 40);
        echo "<br> calling display 2 for second time";
        display2(30,45,46,56,78);
        ?>
    </center>
</body>
</html>