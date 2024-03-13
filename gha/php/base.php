<!DOCTYPE html>
<html lang="pt-br">
<link rel="html/index.html" href="html/index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>Base</title>
</head>
<body>
     <?php
$decimalt = $_GET['decimal'];

$hexadecimalt = base_convert($decimalt, 10, 16);
echo "Decimal para Hexadecimal:", $hexadecimalt;

     ?>
</body>
   </html> 
