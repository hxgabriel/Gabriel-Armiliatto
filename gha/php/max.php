<!DOCTYPE html>
<html lang="pt-br">
<link rel="index.html" href="index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>Máxima</title>
</head>
<body>
     <?php
     $valor1 = $_GET['max1'];
     $valor2 = $_GET['max2'];
     $valor3 = $_GET['max3'];

     $maximo = max($valor1, $valor2, $valor3);
     echo "O valor máximo é: $maximo <br>";
     ?>
</body>
   </html> 