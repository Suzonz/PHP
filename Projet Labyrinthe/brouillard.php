<?php

function addFog($grille)
{
    foreach ($grille as $row => $cols) {
        foreach ($cols as $col => $cell) {
            if (!(
                $cell === "c" ||
                $cell === "g"
                || $grille[min($row + 1, count($grille) - 1)][$col] === "g"
                || $grille[max($row - 1, 0)][$col] === "g"
                || $grille[$row][min($col + 1, count($grille[$row]) - 1)] === "g"
                || $grille[$row][max($col - 1, 0)] === "g"
            )) {
                $grille[$row][$col] = "f";
            };
        };
    };
    return $grille;
};
