<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $gewerkteUren = 40;
     $uurtarief =15.00;
     $bonus = 100.00;
     $bruto = $gewerkteUren * $uurtarief;
     if($gewerkteUren <= 40) {
         echo "Uw basissalaris is: € " . $bruto;
         echo "<br>Uw belasting is: € " . 0.40 * $bruto;
     }

     $basisSalaris = 600;
     $belasting = 240;
     $nettobedrag = ($basisSalaris - $belasting);
     echo "Uw basissalaris is: $basisSalaris";
     echo "Uw belasting is: $belasting";
     echo "Uw nettobedrag is: $nettobedrag";

     $belasting = 0.40 * $bruto;
     $belasting2 = 0.45 * $bruto;
     $netto = $bruto - $belasting;
     if($gewerkteuren <= 40)
     {
         echo "Uw basissalaris is: € ". $bruto;
         echo "<br>Uw belasting is: € ". 0.40 * $bruto;
         echo "<br>Uw nettobedrag is: € ". $netto;
     }
     elseif($gewerkteuren > 40)
     {
         echo "Uw basissalaris is: € ". $bruto;
         echo "<br>Uw basissalaris plus bonus is: € ". ($bruto + $bonus);
         echo "<br>Uw belasting is: € ". 0.45 * $bruto;
         echo "<br>Uw nettobedrag is: € ". ($bruto - $belasting2);
     }
 
     $ternary = ($gewerkteuren < 40 ? "<br>Belasting is 40%" : "<br>Belasting is 45%");
     echo $ternary;
    ?>
</body>
</html>