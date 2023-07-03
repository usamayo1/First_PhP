<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

use function PHPSTORM_META\type;

    $text = 'I am Usama';
    echo "Hello World"."<br>".$text;
    // comment in php
    # second method of comment
    /* 
    This is
    multiline
    comment*/
    echo "<br>";
    $x = 5;
    $y = 10.7;

    $result = $x + $y;

    echo "The result of integer and float is ".$result."<br>";

    $editor = "VS Code";

    echo "I love " .$editor . "!<br>";

    echo gettype($result);

    


    

    ?>

</body>
</html>