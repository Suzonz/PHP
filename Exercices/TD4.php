<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // Exercice 1
    //Écrivez une fonction qui renvoie ce résultat, le nombre de lignes étant un paramètre

    // function pyramide($numA, $numB)
    // {
    //     while ($numA <= $numB) {
    //         for ($i = 0; $i < $numA; $i++) {
    //             echo $numA;
    //         }
    //         echo "<br>";
    //         $numA++;
    //     };
    // };

    // echo pyramide(1, 8);


    // Exercice 2

    // Écrivez une fonction qui renvoie la valeur absolue d’un nombre. Une fois validée, réécrivez-la en
    // une seule instruction. 

    // function nbAbsolut($nb)
    // {
        // if ($nb < 0) {
        //     $nb = $nb * -1;
        // };
        // return (int)$nb;

        // return ($nb < 0) ? (int)($nb * -1) : (int)$nb;

    // };

    // echo nbAbsolut(-12.78)



    // Exercice 3

    // Écrivez une fonction qui renvoie le plus grand nombre contenu dans un tableau numéroté.

    // function biggest($array)
    // {
    //     $biggestNum = 0;
    //     for ($i = 0; $i < count($array) - 1; $i++) {
    //         if ($biggestNum < $array[$i]) {
    //             $biggestNum = $array[$i];
    //         };
    //     };
    //     return $biggestNum;
    // };

    // biggest([12, 95, 7, 31, 48, 1, 140, 66])



    //     Exercice 4
    //     Écrivez une fonction qui renvoie le résultat de l’opération modulo entre 2 integer, sans l’utiliser.
    // Pour obtenir un résultat entier d’une division, il faut utiliser la fonction intdiv($valeur1,$valeur2);


    // function findModulo($nbOne, $nbTwo){
    // return $nbTwo === 0 ? "Division par 0 impossible" : $nbOne - ($nbTwo * intdiv($nbOne, $nbTwo));
    // }

    // findModulo(75, 21);


    // Exercice 5 :
    // Écrivez une fonction qui indique le nombre d’apparitions d’un caractère donné dans une chaîne donnée.
    // Pour cet exercice, je vous laisse trouver les bonnes fonctions sur la doc PHP


    // function occurence($text){
    //     echo substr_count($text, "i");
    // }

    // occurence("Il était un fois, un chat qu'il était tout mignon")


    // Exercice 6 :
    // Le retour du nombre premier, amusez-vous ! Écrivez une fonction qui indique si un chiffre en paramètre est
    // premier ou non.

    function isPrimeNumber($num)
    {
        $isPrime = $num . " est un nombre premier";
        for ($i = 2; $i < $num ; $i++) {
            if ($num % $i === 0) {
                $isPrime = $num . " n'est pas un nombre premier";
                break;
            }
        };
        echo $isPrime;
    }

    isPrimeNumber(74)

    ?>

</body>

</html>