<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $naam = "Carl";
     $straat = "Kruislaan 111";
     $woonplaats = "Utrecht";
     $naw = $naam . " " . $straat . " " . $woonplaats;
     echo "Gegevens: $naw";

     echo <<<TEKST
     <br>Salarisspecificatie van $naam: 2000 euro
     <br>Maand: November
     <br>Jaar: 2020
     TEKST;

     $dollars = 999.99;
     $koers = 1.2;
     $euros = $dollars * $koers;
     $euros = round($euros, 2);
     echo "<br>Bedrag in euros is: $euros";
    ?>
</body>
</html>