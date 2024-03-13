<!DOCTYPE html>
<html lang="pt-br">
<link rel="index.html" href="index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>Mínima</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php
     $valor1 = $_GET['min1'];
     $valor2 = $_GET['min2'];
     $valor3 = $_GET['min3'];

     $minimo = min($valor1, $valor2, $valor3);
     echo "O valor mínimo é: $minimo <br>";
     ?>
</body>
   </html> 