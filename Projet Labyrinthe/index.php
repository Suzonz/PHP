<?php
//RETRY
session_start();
if (isset($_POST["retry"])) {
    session_destroy();
    header("Refresh:0");
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/grille.css">
    <title>Labyrinthe</title>
</head>

<body>
    <h1>Le Chabyrinthe</h1>
    <div class="game">
        <?php
        require_once("brouillard.php");
        require_once("grille.php");
        require_once("movement.php");
        require_once("arrow.php");
        require_once("modal.php");
        ?>
    </div>
</body>

</html>