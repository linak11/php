<!DOCTYPE html>
<html>

<head>
    <title>Exercice 3 - PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">

</head>

<body>

    <?php
    
    function concatString($string1, $string2){
        return $string1 . " " . $string2;
    }
    
    echo concatString("Hello world","Have a nice day");

    ?>

</body>

</html>