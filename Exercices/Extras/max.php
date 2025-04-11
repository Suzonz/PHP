<?php

function maxValue($array)
{
    $max = $array[0];
    if (count($array) > 1) {
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] > $max) {
                $max = $array[$i];
            }
        }
        foreach ($array as $value) {
            if ($value > $max) $max = $value;
        }
    }
    return $max;
}

$error = "";
$answer = "";

if (isset($_POST["one"])) {
    if (!empty($_POST["one"]) && !empty($_POST["two"]) && !empty($_POST["three"]) && !empty($_POST["four"]) && !empty($_POST["five"])) {
        if (is_numeric($_POST["one"]) && is_numeric($_POST["two"]) && is_numeric($_POST["three"]) && is_numeric($_POST["four"]) && is_numeric($_POST["five"])) {
            $answer = "Le nombre le plus grand est " .  maxValue([$_POST["one"], $_POST["two"], $_POST["three"], $_POST["four"], $_POST["five"]]);
        } else $error = "Veuillez rentrer uniquement des chiffres";
    } else $error = "Veuillez remplir tous les champs";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max la menace</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1>Max la menace !</h1>

    <form method="POST" id="form">
        <div class="label-max">
            <label>Rentrez cinq nombres :</label>
        </div>
        <div class="input">
            <input type="number" name="one">
        </div>
        <div class="input">
            <input type="number" name="two">
        </div>
        <div class="input">
            <input type="number" name="three">
        </div>
        <div class="input">
            <input type="number" name="four">
        </div>
        <div class="input">
            <input type="number" name="five">
        </div>

        <div class="button-position">
            <button class="button">Résultat</button>
        </div>
    </form>

    <p><?= $error ?></p>
    <p><?= $answer ?></p>


</body>

</html>

<!-- EXO 4 - Max la menace
Créer un formulaire comprenant 5 inputs.
L'utilisateur devra renseigner un nombre dans chaque input.
A la soumission du formulaire, afficher le plus grand nombre des 5 rentrés. -->