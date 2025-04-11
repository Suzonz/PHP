<?php

// setcookie();


$error = "";
if (isset($_POST["lastName"])) {
    if (!empty($_POST["lastName"]) && !empty($_POST["firstName"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        $path = "uploads/" . basename($_FILES["avatar"]["name"]);
        if ($_FILES["avatar"]["size"] > 100000) {
            $error = "Fichier trop lourd !";
        } else {
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $path);
            header("Location:accueil.php?lastName=" . htmlspecialchars($_POST["lastName"]) . "&firstName=" . htmlspecialchars($_POST["firstName"]));
        }
    } else $error = "Veuillez remplir tous les champs";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/style.css" /> -->
</head>

<body>
    <?php require("header.php") ?>
    <main>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="lastName" placeholder="Votre nom" />
            <input type="text" name="firstName" placeholder="Votre prénom" />
            <input type="email" name="email" placeholder="Votre email" />
            <input type="file" name="avatar" />
            <input type="password" name="password" placeholder="Votre mot de passe" />
            <button>S'inscrire</button>
        </form>
        <p><?= $error ?></p>
    </main>
</body>

</html>


