<!-- EXO 5 - hexdec le retour ?


L'utilisateur doit renseigner la valeur décimale (le nombre compris entre 0 et 255) symbolisant la couleur demandée
Changer la couleur de fond par celle demandée par l'utilisateur -->


<?php

$error = "";

$color = "(5, 95, 68)";
if (isset($_POST["red"])) {
    if (!empty($_POST["red"]) &&  !empty($_POST["blue"]) && !empty($_POST["green"])) {
        if (is_numeric($_POST["red"]) &&  is_numeric($_POST["blue"]) && is_numeric($_POST["green"])) {
            if (!($_POST["red"] < 0  || $_POST["red"] > 255  || $_POST["blue"] < 0  || $_POST["blue"] > 255  || $_POST["green"] < 0  || $_POST["green"] > 255)) {
                $color = "(" . htmlspecialchars($_POST["red"]) . "," . htmlspecialchars($_POST["green"]) . "," . htmlspecialchars($_POST["blue"]) . ")";
            } else $error = "Veuillez remplir tous les champs avec un nombre compris entre 0 et 255";
        } else $error = "Veuillez n'utiliser que des chiffres";
    } else $error = "Veuillez remplir tous les champs";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coloswap</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            background-color: <?= "rgb" . $color ?>;
        }
    </style>

</head>

<body>
    <h1>Changement de couleur</h1>

    <form method="POST">
        <div class="label-max">
            <label>Choisissez une valeur entre 0 et 255 pour chaque couleur</label>
        </div>
        <input type="number" name="red" placeholder="Rouge" />
        <input type="number" name="green" placeholder="Vert" />
        <input type="number" name="blue" placeholder="Bleu" />
        <div class="button-position">
            <button class="button">Valider</button>
        </div>
    </form>

    <p><?= $error ?></p>

</body>

</html>