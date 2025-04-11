<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <!-- <?php
                $bouh = "bouh";
                echo $bouh . "<br>";
                $a = 2;
                $b = 3;
                echo "<p>" . $a + $b . "</p>";
                echo "<p>" . $a - $b . "</p>";
                echo "<p>" . $a * $b . "</p>";
                echo "<p>" . $a / $b . "</p>";
                echo "<p>" . $a % $b . "</p>";
                echo "<p>" . $a ** $b . "</p>";
                if ($a > $b) {
                    echo "<p>blerg, a > b</p>";
                } elseif ($a < $b) {
                    echo "<p>blerg, a < b</p>";
                } else {
                    echo "<p>blerg, a = b</p>";
                }
                ?> -->


        <?php if ($a > $b) : ?>
            <div>
                <ul>
                    <li>
                        Yala
                    </li>
                    <li>
                        Yolo
                    </li>
                </ul>
            </div>
        <?php else : ?>
            <ul>
                <li>
                    Yili
                </li>
                <li>
                    Yulu
                </li>
            </ul>
        <?php endif; ?>


    </h1>
</body>

</html>