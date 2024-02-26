<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Curso PHP</title>
</head>

<body>

   <?php

   $result = [];

   for ($i = 0; $i < 6; $i++) {

      $element = $result[$i];

      $randomNumber = rand(1, 60);

      if ($element == $randomNumber) {
         $randomNumber = rand(1, 60);
      }

      array_push($result, $randomNumber);
   }

   print_r($result);

   ?>
</body>

</html>