<!DOCTYPE html>
<html lang="pt-br">
<link rel="index.html" href="index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>Pow</title>
</head>
<body>
     <?php
     $base = $_GET['basepow'];
     $expoente = $_GET['expoentepow'];

     $resultado = pow($base, $expoente);
     echo "$base elevado à potência $expoente é igual a $resultado<br>";
     ?>
</body>
   </html> 