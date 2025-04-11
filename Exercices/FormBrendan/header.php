<!-- <link rel="stylesheet" href="./assets/css/header.css">
<link rel="stylesheet" href="./assets/css/style.css"> -->

<?php
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "fr";
}

if (isset($_GET["lang"])) {
    $_SESSION['lang'] = htmlspecialchars($_GET["lang"]);
}

if (!isset($_SESSION['darkmode'])) {
    $_SESSION['darkmode'] = "light";
}

if (isset($_GET["darkmode"])) {
    $_SESSION['darkmode'] = htmlspecialchars($_GET["darkmode"]);
}


?>
<header>
    <nav>
        <ul>
            <li><a href="./index.php">Inscription</a></li>
            <li><a href="./accueil.php">Accueil</a></li>
            <?php if($_SESSION['lang'] === "en") : ?>
                <a href="?lang=fr">
                    <img src="./assets/image/fr.svg" height="10px"/>
                </a>
            <?php else : ?>
                <a href="?lang=en">
                    <img src="./assets/image/uk.svg" height="10px"/>
                </a>
            <?php endif; ?>
            <?php if($_SESSION['darkmode'] === "dark") : ?>
                <a href="?darkmode=light">
                    <img src="./assets/image/sun.svg" height="20px"/>
                </a>
            <?php else : ?>
                <a href="?darkmode=dark">
                    <img src="./assets/image/moon.svg" height="20px"/>
                </a>
            <?php endif; ?>
        </ul>
    </nav>
</header>


<!-- EXO cookie :
Lorsqu'on clique sur Light Mode, la couleur de fond devient une couleur claire et les textes de couleur foncée
Lorsqu'on clique sur Dark Mode, la couleur de fond devient sombre et les textes clairs
Garder en mémoire le choix de l'utilisateur à l'aide d'un cookie -->