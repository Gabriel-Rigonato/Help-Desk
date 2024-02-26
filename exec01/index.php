<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php

   $year = 15;
   $height = 50.01;

   if ($year >= 16 && $year <= 69 && $height >= 50.00) {
      echo "Atende aos requisitos";
   } else {
      echo "Não atende aos requisitos";
   }
   ?>
</body>

</html>