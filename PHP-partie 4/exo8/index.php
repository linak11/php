<!DOCTYPE html>
<html>

<head>
    <title>Exercice 8 - PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">

</head>

<body>

    <?php

function addition($nb1=5,$nb2=5,$nb3=5){
   
    return ($nb1 + $nb2 + $nb3);
    
}

function vero(...$nb){
    $result = 0;
    

    foreach($nb as $nbr){
        $result += $nbr;
        
    }
    return $result;
}
    echo vero(6, 6, 6);



    ?>


</body>

</html>