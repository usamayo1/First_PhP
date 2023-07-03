<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $x = 8;

    function myTest() {
        $x = 5;
        echo "<p>This variable is in Local scope : $x</p>";
    }

    myTest();

    echo "<p>This variable is in Global scope : $x</p>";
    

    $x = 6;
    $y = 2;

    function newTest(){
        global $x, $y;
        $y = $x + $y;
    }

    newTest();
    
    echo $y; 

    ?>
</body>
</html>