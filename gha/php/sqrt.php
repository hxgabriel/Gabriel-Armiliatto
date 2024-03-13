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
     $numero = $_GET['numerosqrt'];

     $raiz_quadrada = sqrt($numero);
     echo "A raiz quadrada de $numero é igual a $raiz_quadrada";
     ?>
</body>
   </html> 