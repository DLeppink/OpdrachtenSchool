<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$kleuren = array("ruiten","harten","klaveren","schoppen");
$waardes = array("1","2","3","4","5","6","7","8","9","10","boer","vrouw","heer",);

$kaart = random_int(0, 3);
$kaart1 = random_int(0,12);
echo "<img src='kaarten/$kleuren[$kaart]_$waardes[$kaart1].svg'>";
?>
</body>
</html>