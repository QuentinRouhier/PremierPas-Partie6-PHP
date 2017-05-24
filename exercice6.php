<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 6</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice5.php?semaine=12">Exercice 5</a></li>
            <li><a href="index.php">Index</a></li>
        </ul>
        <p>
            <?php
            if (isset($_GET['batiment']) && isset($_GET['salle'])) { // On a le nom et le prénom
                echo 'Bien jouer tu a reussi l\'exercice ';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'RATER SAUCISSE!';
            }
            ?>
        </p>
    </body>
</html>
