<?php

$error = "";
$answer = "";

if (isset($_POST["ht"])) {
    if (empty($_POST["ht"]) || empty($_POST["tva"]))   $error = "Veuillez remplir tous les champs";
    else $answer = "Le montant TTC est de " .  htmlspecialchars($_POST["ht"]) + ((htmlspecialchars($_POST["tva"]) / 100) * htmlspecialchars($_POST["ht"])) . "€";
    ;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'amour de l'État</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1>L'amour de l'État</h1>

    <form method="POST" id="form">
        <div class="label">
            <label for="ht">Prix HT</label>
        </div>
        <div class="input">
            <input type="number" name="ht">
        </div>
        <div class="label">
            <label for="tva">TVA en %</label>
        </div>
        <div class="input">
            <input type="number" name="tva">
        </div>

        <div class="button-position">
            <button class="button">Total</button>
        </div>
    </form>

    <p><?= $error ?></p>
    <p><?= $answer?></p>


</body>

</html>