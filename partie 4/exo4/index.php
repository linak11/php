<!DOCTYPE html>
<html>

<head>
    <title>Exercice 4 - PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">

</head>

<body>

    <?php

        function compareInteger($int1, $int2){
          if ($int1 > $int2){
              return "Le premier nombre est plus grand ($int1, $int2)";
          } elseif ($int1 < $int2){
              return "Le premier nombre est plus petit ($int1, $int2)";
          } elseif ($int1 == $int2){
              return "Les deux nombres sont identiques ($int1, $int2)";
          }else {
              return "Veuillez entrer des paramètres valides ($int1, $int2)";
          }
        }

            echo compareInteger(3,9);

    
    ?>


</body>

</html>