<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $breedte = 10;
    $lengte = 11;
    $hoogte = 5;

    $oppervlakte = $breedte * $lengte;
    $volume = $breedte * $lengte * $hoogte;

    echo "<br>Containeroppervlakte is: $oppervlakte";
    echo "<br>Containervolume is: $volume";
    ?>
</body>
</html>