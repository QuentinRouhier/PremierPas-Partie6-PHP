<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice4.php?langage=PHP&serveur=LAMP">Exercice 4</a></li>
            <li><a href="exercice6.php?batiment=12&salle=101">Exercice 6</a></li>
        </ul>
        <p>
            <?php
            if (isset($_GET['semaine'])) { // On a le nom et le prénom
                echo 'Bien jouer tu a reussi l\'exercice ';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'RATER SAUCISSE!';
            }
            ?>
        </p>
    </body>
</html>