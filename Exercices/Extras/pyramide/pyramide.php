<?php
function pyramide($etage)
{
    for ($i = 1; $i <= $etage; $i++) {
        echo str_repeat($i, $i);
        echo "<br>";
    }
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramide</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <h2>Pyramide</h2>
    <p>
        <?php
        if (isset($_GET["floors"])) echo pyramide(htmlspecialchars($_GET["floors"]));
        ?>
    </p>

</body>

</html>