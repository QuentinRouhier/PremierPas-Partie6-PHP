<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice1.php?nom=Nemare&amp;prenom=Jean">Exercice 1</a></li>
            <li><a href="exercice3.php">Exercice 3</a></li>
            <li><a href="index.php">Index</a></li>
        </ul>
        <p>
            <?php
            if (isset($_GET['prenom']) && isset($_GET['nom']) && isset ($_GET['age'])) { // On a le nom et le prénom
                echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' tu as ' . $_GET['age'] . ' !';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner un nom, un prénom et un age !';
            }
            ?>
        </p>
    </body>
</html>
