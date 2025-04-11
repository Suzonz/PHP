<?php
$color = "white";
if (isset($_POST["color"])) {
    $color = htmlspecialchars($_POST["color"]);
    if (strlen($color) != 7) {
        echo "erreur";
    } else {
        echo "<style>body {background-color: $color}</style>";
        echo "couleur en HEX : $color <br>";
        $color = str_replace("#", "", $color);
        $red = $color[0] . $color[1];
        $green = $color[2] . $color[3];
        $blue = $color[4] . $color[5];
        echo $rgb = "(" .  hexdec($red) . "," . hexdec($green) . "," . hexdec($blue) . ")";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {background-color: #<?= $color ?>;};
    </style>
</head>

<body>
    <form method="POST">
        <input type="text" name="color" value="#" />
        <button>Valider</button>
    </form>
</body>

</html>