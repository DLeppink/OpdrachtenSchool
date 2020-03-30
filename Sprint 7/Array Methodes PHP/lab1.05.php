<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nummers = [];
    $nummers[0] = "een";
    $nummers[1] = "twee";
    $nummers[2] = 3;
    $nummers[3] = "vier";

    echo "Stap 3 <br>"; 
    array_push($nummers, 5);
    print_r($nummers);
    echo "<br>";
    var_dump($nummers[4]);
    array_pop($nummers);
    echo "<br>";
    print_r($nummers);
    echo "<br>";
    array_unshift($nummers, "");
    print_r($nummers);
    array_shift($nummers);
    echo "<br>";
    print_r($nummers);
    array_shift($nummers);
    echo "<br>";
    print_r($nummers);
    array_shift($nummers);
    echo "<br>";
    print_r($nummers);
    ?>
</body>
</html>