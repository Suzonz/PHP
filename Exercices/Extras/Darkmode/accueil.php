<?php require("cookieManager.php") ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="index.css" />
    </head>
    <body class="<?= $_COOKIE["theme"] ?>">
        <?php require("header.php") ?>
        <main>
            <p>
                <?php if($_SESSION["lang"] === "en") : ?>
                    Welcome
                <?php else : ?>
                    Bienvenue
                <?php endif; ?>
                <?= isset($_GET["firstName"]) ? htmlspecialchars($_GET["firstName"]) . " " . htmlspecialchars($_GET["lastName"]) : "yolo" ?>
            </p>
        </main>
        <?php require("footer.php") ?>
    </body>
</html>