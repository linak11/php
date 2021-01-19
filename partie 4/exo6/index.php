<!DOCTYPE html>
<html>

<head>
    <title>Exercice 6 - PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">

</head>

<body>

    <?php

    
function hello($firstName, $lastName, $age)
{
    return "Bonjour $firstName $lastName vous avez $age ans.";
}

echo hello("Eric", "Dupont-Moretti", 59);
   
   ?>

</body>

</html>