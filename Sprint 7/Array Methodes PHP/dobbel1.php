<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$gegooid = 0;

$array = array();
for($i=0;$i<5;$i++)
{
    $dobbelsteen = rand(1,6);
    echo "<br>Er is $dobbelsteen gegooid";
    $gegooid++;
    array_push($array, $dobbelsteen);
}
echo "<br>";
?>

<form action="dobbel1.php" method="post">
    <input type="submit" value="Werp dobbelstenen">
</body>
</html>