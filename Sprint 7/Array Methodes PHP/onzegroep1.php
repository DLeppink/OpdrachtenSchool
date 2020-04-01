<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$leden = array(
    array("<br>0320952" => "<br>Studentnummer: 0320952</br>" . "<br>Naam: Emre</br>" . "<br>Leeftijd: 16</br>" . "<br>Adres: Haaksbergen</br>"),
    array("<br>0322086" => "<br>Studentnummer: 0322086</br>" . "<br>Naam: Ahmed</br>" . "<br>Leeftijd: 16</br>" . "<br>Adres: Enschede</br>"),
    array("<br>0320287" => "<br>Studentnummer: 0320287</br>" . "<br>Naam: Dylan</br>" . "<br>Leeftijd: 16</br>" . "<br>Adres: Enschede</br>")
);
function printarray($leden)
{
echo $leden;
}

array_walk_recursive($leden[array_rand($leden,1)],'printarray');
?>
</body>
</html>