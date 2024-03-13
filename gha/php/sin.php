<!DOCTYPE html>
<html lang="pt-br">
<link rel="index.html" href="index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>Sin</title>
</head>
<body>
     <?php
     $angulo = $_GET['angulosin'];

     $seno = sin($angulo);
     echo "O seno de $angulo é aproximadamente igual a $seno<br>";
     ?>
</body>
   </html> 