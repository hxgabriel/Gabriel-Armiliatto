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
     $angulo = $_GET['angulotan'];
     $angulo_radiano = deg2rad($angulo);

     $tangente = tan($angulo_radiano);
     echo "A tangente de $angulo é aproximadamente igual a $tangente<br>";
     ?>
</body>
   </html> 