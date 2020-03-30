<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $playlist = array (
    array("Genre" => "Hiphop", "auteur" => "John Williams", "titel" => "My Girl"),
    array("Genre" => "Jazz", "auteur" => "John Coltrane", "titel" => "New York"),
    array("Genre" => "Hiphop", "auteur" => "Shakira", "titel" => "Obsession")
  );

function printArray($item, $key) {
   echo "<br>$key" . ": " . "<i> $item <i>";
}
array_walk_recursive($playlist, "printArray");

$playlist[3] = array("Genre" => "Latin", "auteur" => "Ceatano Veloso", "titel" => "Cafe Atlantico");

$tekst = implode("|", $playlist[0]);
$tekst2 = implode("|", $playlist[1]);
$tekst3 = implode("|", $playlist[2]);
$tekst4 = implode("|", $playlist[3]);
echo "<br>";
echo "<br>Track 0: $tekst";
echo "<br>Track 1: $tekst2";
echo "<br>Track 2: $tekst3";
echo "<br>Track 3: $tekst4";
?>
</body>
</html>