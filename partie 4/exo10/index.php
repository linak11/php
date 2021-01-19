<!DOCTYPE html>
<html>

<head>
    <title>Exercice 10 - PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">

</head>

<body>

    <?php
   
    // function factorielle($nbr){
    //     if($nbr==1){
    //         return 1;
    //     }
    //     else {
    //     return $nbr*factorielle($nbr-1);
    //     }
    // }
    // echo factorielle(5);

        function william($nb){
            return gmp_fact($nb);
        }
        echo william (5);

        function catherine ($nb){
            if ($nb == 0){
            return 1;  

            } else {
                return $nb * catherine($nb-1);
            }
           
        }
        echo catherine (0);

    ?>


</body>

</html>