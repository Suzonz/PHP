<?php
    session_start();
    if(!isset($_SESSION["lang"])){
        $_SESSION["lang"] = "fr";
    }
    if(isset($_GET["lang"])){
        $_SESSION["lang"] = htmlspecialchars($_GET["lang"]);
    }
?>

<header>
    <nav>
        <ul>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="accueil.php">Accueil</a></li>
            <li>
                <form id="fr" method="GET">
                    <input type="hidden" name="lang" value="fr" />
                    <button>
                    <img src="./assets/image/fr.svg" height="20px"/>
                    </button>
                </form>
            </li>
            <li>
                <a href="?lang=en" id="en">
                    <img src="./assets/image/uk.svg" height="20px"/>
                </a>
            </li>
            <div id="theme">
                <li>
                    <a href="?theme=dark">
                    <img src="./assets/image/moon.svg" />
                    </a>
                </li>
                <li>
                    <a href="?theme=light">
                    <img src="./assets/image/sun.svg" />
                    </a>
                </li>
            </div>
        </ul>
    </nav>
</header>