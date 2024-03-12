<!DOCTYPE html>
<html lang="pt-br">
<link rel="index.html" href="index.html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initia-sacale=1.0">
    <title>variavel</title>
</head>
<body>
     <?php
     $numerodivt = $_GET['numerodiv'];

     $values = array(2, 4, 6, -1, 3);
     echo min($values);  // Saída: -1
     
     $names = array('Alice', 'Bob', 'Charlie');
     echo min($names);  // Saída: Alice (ordem alfabética)
     ?>
</body>
   </html> 