<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $voetbal_clubs = array
    (
        array("<br>Voatbal-club: Heracles","<br>Nummer: 7","<br>Plaats: Almelo","<br>Wedstrijden gespeeld: 15","<br>Wedstrijden gewonnen: 11","<br>Wedstrijden verloren: 3","<br>Wedstrijden gelijk gespeeld: 4<br>"),
        array("<br>Voetbal-club: PSV","<br>Nummer: 1","<br>Plaats: Eindhoven","<br>Wedstrijden gespeeld: 17","<br>Wedstrijden gewonnen: 12","<br>Wedstrijden verloren: 2","<br>Wedstrijden gelijk gespeeld: 2<br>")
    );
    
    function printarray($clubs)
    {
        echo $voetbal_clubs;
    }
    
    array_walk_recursive($voetbal_clubs,'printarray');
    ?>
</body>
</html>