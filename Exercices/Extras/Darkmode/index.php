<?php
require("cookieManager.php");

$error = "";
if (isset($_POST["lastName"])) {
    if (!empty($_POST["lastName"]) && !empty($_POST["firstName"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        $path = "uploads/" . basename($_FILES["avatar"]["name"]);
        if ($_FILES["avatar"]["size"] > 100000) {
            $error = "Fichier trop lourd !";
        } else {
            // move_uploaded_file($_FILES["avatar"]["tmp_name"], $path);
            // header("Location:accueil.php?lastName=" . htmlspecialchars($_POST["lastName"]) . "&firstName=" . htmlspecialchars($_POST["firstName"]));
        }
    } else $error = "Veuillez remplir tous les champs";
}

$regexEmail = '/^[A-z0-9_-]+[A-z-0-9_.-]*[A-z0-9_-]+@[A-z0-9_-]+[A-z0-9_.-]*[A-z0-9_-]+\.[A-z-]+[A-z-.]*[A-z-]+$/';
$regexname = '/^[A-z]+[A-z-]*[A-z]+$/';
$regexphone = '/^(\+33|0)[1-9][0-9]{8}/';
$regexmessage = '/^[A-zÀ-ÿ0-9\,\.\!\?\-\ \'\"\;\^\/\+\*]*$/';


if (isset($_POST["email"])) {
    preg_match(($regexEmail), htmlspecialchars($_POST["email"]));
    preg_match(($regexname), htmlspecialchars($_POST["lastName"]));
    preg_match(($regexname), htmlspecialchars($_POST["firstName"]));
    preg_match(($regexphone), htmlspecialchars($_POST["phone"]));
    preg_match(($regexmessage), htmlspecialchars($_POST["message"]));
};
?>

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
        <form method="POST" enctype="multipart/form-data">
            <div>
                <input type="text" name="lastName" placeholder="Votre nom" required />
                <input type="text" name="firstName" placeholder="Votre prénom" />
            </div>
            <input type="email" name="email" placeholder="Votre email" />
            <input type="password" name="password" placeholder="Votre mot de passe" />
            <input type="file" name="avatar" />
            <button>S'inscrire</button>
        </form>
        <p class="error"><?= $error ?></p>
    </main>
    <?php require("footer.php") ?>
</body>

</html>