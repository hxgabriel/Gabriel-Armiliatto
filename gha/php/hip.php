<!DOCTYPE html>
<html lang="pt-br">
<link rel="html/index.html" href="html/index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>Hipotenusa</title>
</head>
<body>
     <?php

$cat01 = $_GET['cat1'];
$cat02 = $_GET['cat2'];

$hipotenusa = hypot($cat01, $cat02);

echo "A hipotenusa é:", $hipotenusa;
     ?>
</body>
   </html> 

