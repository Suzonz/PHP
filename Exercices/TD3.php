<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php


    $tableau = [
        'infos' => ['nom' => 'Pesto', 'prenom' => 'Julia', 'age' => 30],
        'films' => [
            'action' => ['Piège de cristal', 'Mad Max', 'Terminator', 'Matrix'],
            'comédie' => ['Brice de Nice', 'Les Visiteurs', 'Le Dîner de cons', 'Neuilly sa mère !']
        ]
    ];

    // foreach($tableau["infos"] as $key => $values){
    //     echo "$key : $values <br>";
    // }

    // foreach($tableau["films"] as $key => $value){
    //  foreach($value as $innerValues){
    //     echo "$key : $innerValues <br>";
    //  };
    // }
    

    // $key = infos && $value == ['nom' => 'Pesto', 'prenom' => 'Julia', 'age' => 30]
    foreach ($tableau as $key => $value) {
        // $keyBis == nom || action && $innerValues == Pesto || ['Piège de cristal', 'Mad Max', 'Terminator', 'Matrix']
        foreach ($value as $keyBis => $innerValues) {
            if (!is_array($innerValues)) {
                echo "$keyBis : $innerValues <br>";
            } else {
                foreach ($innerValues as $movie) {
                    echo "$keyBis : $movie <br>";
                }
            }
        };
    };

    ?>



</body>

</html>