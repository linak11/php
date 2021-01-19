<!DOCTYPE html>
<html>

<head>
    <title>Exercice 7 - PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">

</head>

<body>

    <?php
          
        
        function majority($age, $gender){

        if ($age >= 18 && $gender == "Homme")
        {
            return "Vous êtes un homme et vous êtes majeur";
        }

        elseif ($age < 18 && $gender == "Homme")
        {
            return "Vous êtes un homme et vous êtes mineur";
        }

        elseif ($age >= 18 && $gender == "Femme")
        {
            return "Vous êtes une femme et vous êtes majeure";
        }

        else{

           return "Vous êtes une femme et vous êtes mineure "; 
        }

        }
        echo majority(15, "Femme");

    ?>


</body>

</html>