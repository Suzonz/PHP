<?php

if (!isset($_SESSION["grille"])) {
    $_SESSION["grille"] = [
        [
            ['b', '', '', '', '', '', '', ''],
            ['', '', 'b', 'b', '', 'b', 'b', ''],
            ['', 'b', 'g', '', 'b', '', 'b', ''],
            ['', '', 'b', '', '', '', '', ''],
            ['b', '', 'b', '', '', 'b', '', ''],
            ['', '', 'b', 'b', '', 'b', 'b', ''],
            ['', '', 'c', 'b', '', '', '', 'b']
        ],
        [
            ['b', '', '', '', '', 'b', 'b', ''],
            ['b', '', 'b', '', 'b', '', '', ''],
            ['', '', '', 'b', '', '', 'b', ''],
            ['', 'b', '', '', '', 'b', '', ''],
            ['', 'b', 'g', 'b', '', 'b', 'b', ''],
            ['', 'b', 'b', '', 'b', '', '', ''],
            ['b', 'c', '', '', '', '', 'b', '']
        ]
    ];
}

if (!isset($_SESSION['grille_choisie'])) {
    $_SESSION['grille_choisie'] = rand(0, 1);
}

$num = $_SESSION['grille_choisie'];

$grille = $_SESSION["grille"][$num];

function placement($grille)
{
    echo "<div id='grille'>";
    foreach (addFog($grille) as $row => $cols) {
        echo "<div class='row'>";
        foreach ($cols as $col => $cell) {
            if ($cell === "g") {
                echo "<div class='case' ><img src='./image/girl.png' alt='girl' height=100px></div>";
            } elseif ($cell === "c") {
                echo "<div class='case'><img src='./image/cat19.png' alt='cat' height=60px></div>";
            } elseif ($cell === "b") {
                echo "<div class='case'><img src='./image/bush.png' alt='bush' height=140px></div>";
            } elseif ($cell === "f") {
                echo "<div class='case'><img src='./image/fog.png' alt='fog' height=110px></div>";
            } else echo "<div class='case'>$cell</div>";
        }
        echo "</div>";
    }
    echo "</div>";
};
