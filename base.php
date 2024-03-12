<!DOCTYPE html>
<html lang="pt-br">
<link rel="html/index.html" href="html/index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>variavel</title>
</head>
<body>
     <?php
$decimal = "255";
$hexadecimal = base_convert($decimal, 10, 16);
echo "Decimal para Hexadecimal: " . $hexadecimal . "\n";

$hexadecimal = "ff";
$decimal = base_convert($hexadecimal, 16, 10);
echo "Hexadecimal para Decimal: " . $decimal . "\n";
     ?>
</body>
   </html> 
