<?php

function isPrimeNumber($num)
{
    $isPrime = $num . " est un nombre premier";
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $isPrime = $num . " n'est pas un nombre premier";
            break;
        }
    };
    return $isPrime;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le maudit</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1>Le nombre maudit !</h1>

    <form method="POST" id="form">
        <div class="label">
            <label for="nmbr">Choisissez un nombre :</label>
        </div>
        <div class="input">
            <input type="number" name="nmbr">
        </div>

        <div class="button-position">
            <button class="button">Valider</button>
        </div>
    </form>

    <?php
    $error = "";
    $answer = "";
    if (isset($_POST["nmbr"])) {
        $htmlNumber = htmlspecialchars($_POST["nmbr"]);
        if (empty($htmlNumber) || !(intval($htmlNumber))) $error = "Veuillez rentrer un nombre";
        else $answer =  isPrimeNumber(intval($htmlNumber));
    }
    ?>

    <p><?= $error ?></p>
    <p><?= $answer ?></p>


</body>

</html>

<!-- EXO 2 - Nombre premier le maudit :
Lorsqu'on soumet le formulaire, 
on doit recevoir un message indiquant si oui ou non le nombre renseigné par l'utilisateur est premier.
Bien gérer les différentes erreurs de l'utilisateur possible (s'il ne donne pas un nombre par exemple) -->