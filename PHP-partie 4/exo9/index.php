<!DOCTYPE html>
<html>

<head>
    <title>Exercice 9 - PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">

</head>

<body>

    <?php

function compareNumbers($number1, $number2)
{
   return max($number1, $number2);
}

function nora(...$nb){
    rsort($nb);
    return $nb[0];
}

echo nora(70, 40, 33, 25, 76);



    ?>


</body>

</html>