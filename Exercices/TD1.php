<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 
     <p> Exercice 1</p>
     
     <?php
        $age = 300
        ?>
    <?php
    if ($age >= 18) :
    ?>
        <p>Bienvenue sur notre site.</p>
    <?php else : ?>
        <p>Vous n'êtes pas autorisé à accéder à ce site</p>
    <?php endif; ?> -->

    <!-- <p>Exercice 2</p>

    <?php
    $nbr = 4;
    ?>
    <?php
    if ($nbr % 2 === 0) :
    ?>
        <p>Le nombre est pair</p>
    <?php else : ?>
        <p>Le nombre est impair</p>
    <?php endif; ?> -->


    <!-- <p>Exercice 3</p>

    <?php
    $salary = 100000;
    $age = 29;
    ?>

    <?php
    if ($salary >= 50000 && $age <= 30) : ?>
        <p>Admissible à l'emprunt</p>

    <?php else : ?>
        <p>Non admissible à l'emprunt</p>
    <?php endif; ?> -->


<p>Exercice 4</p>

    <?php
    $age = 12;

    switch ($age) {
        case 12:
            echo "<p>Trop jeune</p>";
            break;
        case 16:
            echo "<p>On y est presque !</p>";
            break;
        case 18:
            echo "<p>Bravo !</p>";
            break;
        default:
            echo "<p>Dommage</p>";
    }
    ?>

</body>

</html>