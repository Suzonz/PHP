<?php
session_start();
if (isset($_POST["message"])) {
    $_SESSION["conversation"][] = [htmlspecialchars($_POST["user"]), htmlspecialchars($_POST["message"]), false];
}
if (isset($_GET["like"])) {
    $_SESSION["conversation"][intval($_GET["like"])][2] = !$_SESSION["conversation"][intval($_GET["like"])][2];
}
if (isset($_GET["deleteHistory"])) {
    $_SESSION["conversation"] = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css" />
</head>

<body>
    <?php if (isset($_SESSION["conversation"])) : ?>
        <div id='conversation'>
            <?php foreach ($_SESSION["conversation"] as $index => $message) { ?>
                <div class="message <?= $message[0] ?>">
                    <p><?= $message[1] ?></p>
                    <a href="?like=<?= $index ?>">
                        <?php
                        if ($message[2]) {
                            echo "<img src='img/full.png' />";
                        } else echo "<img src='img/empty.png' />";
                        ?>
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="index.php">
        <textarea placeholder="Votre message" name="message"></textarea>
        <div>
            <input type="radio" id="user1" name="user" value="user1" checked />
            <label for="huey">User 1</label>

            <input type="radio" id="user2" name="user" value="user2" />
            <label for="dewey">User 2</label>
        </div>
        <button>Envoyer</button>
    </form>
    <a href="?deleteHistory=true">Vider l'historique</a>

</body>

</html>