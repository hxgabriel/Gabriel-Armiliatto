<!DOCTYPE html>
<html lang="pt-br">
<link rel="index.html" href="index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>Pi</title>
</head>
<body>
     <?php
     $raio = $_GET['raiopi'];
     $diametro = $_GET['diampi'];

     $area_circulo = pi() * $raio * $raio;
     echo "A área de um círculo com raio $raio é: $area_circulo<br>";

     $circunferencia = pi() * $diametro;
     echo "A circunferência de um círculo com diâmetro $diametro é: $circunferencia<br>";
     ?>
</body>
   </html> 