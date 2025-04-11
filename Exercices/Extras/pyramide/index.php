<?php

$error = "";
if (isset($_POST["floors"])) {
    if (empty($_POST["floors"]))   $error = "Veuillez choisir un nombre d'étages";
    elseif ($_POST["floors"] < 0) $error = "Veuillez choisir un nombre positif";
    else header("Location:pyramide.php?floors=" . htmlspecialchars($_POST["floors"]));
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramide</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <h1>Construction de la pyramide</h1>

    <form method="POST" id="form">
       <div class="label">
        <label for="floors">Nombre d'etage de la pyramide :</label>
       </div> 
       <div class="input">
           <input type="number" name="floors">
       </div>
     
       <div class="button-position">
        <button class="button">Construire</button>
    </div> 
    </form>

    <p><?= $error ?></p>

</body>

</html>