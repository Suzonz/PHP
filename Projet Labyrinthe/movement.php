<?php

//DROITE
if (isset($_POST["right"])) {
    for ($i = 0; $i < count($grille); $i++) {
        for ($j = 0; $j < count($grille[$i]) - 1; $j++) {
            if ($grille[$i][$j] === "g" && $grille[$i][$j + 1] != "b") {
                $grille[$i][$j] = "";
                $grille[$i][$j + 1] = "g";
                break;
            };
        };
    };
}

//GAUCHE
if (isset($_POST["left"])) {
    for ($i = 0; $i < count($grille); $i++) {
        for ($j = 1; $j < count($grille[$i]); $j++) {
            if ($grille[$i][$j] === "g" && $grille[$i][$j - 1] != "b") {
                $grille[$i][$j] = "";
                $grille[$i][$j - 1] = "g";
                break;
            };
        };
    };
}

// HAUT
if (isset($_POST["up"])) {
    for ($i = 1; $i < count($grille); $i++) {
        for ($j = 0; $j < count($grille[$i]); $j++) {
            if ($grille[$i][$j] === "g" && $grille[$i - 1][$j] != "b") {
                $grille[$i][$j] = "";
                $grille[$i - 1][$j] = "g";
                break 2;
            };
        };
    };
}

// BAS
if (isset($_POST["down"])) {
    for ($i = count($grille) - 2; $i >= 0; $i--) {
        for ($j = 0; $j < count($grille[$i]); $j++) {
            if ($grille[$i][$j] === "g" && $grille[$i + 1][$j] != "b") {
                $grille[$i][$j] = "";
                $grille[$i + 1][$j] = "g";
                break 2;
            };
        };
    };
}

echo placement($grille);

$_SESSION["grille"][$num] = $grille;

//VICTOIRE
$yolo = false;
for ($i = 0; $i < count($grille); $i++) {
    if (in_array("c", $_SESSION["grille"][$num][$i]))
        $yolo=true;
};