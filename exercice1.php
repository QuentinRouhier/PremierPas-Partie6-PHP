<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice2.php?nom=Nemare&amp;prenom=Jean&amp;age=18">Exercice 2</a></li>
            <li><a href="index.php">Index</a></li>
        </ul>
        <p>
            <?php
            if (isset($_GET['prenom']) && isset($_GET['nom'])) { // On a le nom et le prénom
                echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner un nom et un prénom !';
            }
            ?>
        </p>
    </body>
</html>
