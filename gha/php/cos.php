<!DOCTYPE html>
<html lang="pt-br">
<link rel="index.html" href="index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>Sin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php
     $cosseno = $_GET['angulocos'];
     $angulo_radiano = deg2rad($angulo);

     $cosseno = cos($angulo_radiano);
     echo "O cosseno de $angulo é aproximadamente igual a $cosseno<br>";
     ?>
</body>
   </html> 