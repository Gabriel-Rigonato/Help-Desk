<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php

   function calculateIncomeTax($salary)
   {
      switch ($salary) {

         case $salary <= 1903.68:
            echo "Você está isento de impostos";
            break;

         case ($salary > 1903.68 && $salary <= 2826.65):
            $incomeTax = $salary * (7.5 / 100);
            return $incomeTax;
            break;

         case ($salary >=  2826.65 && $salary <= 3751.05):
            $incomeTax = $salary * (15 / 100);
            return $incomeTax;
            break;

         case $salary >= 3751.05 && $salary <= 4664.68:
            $incomeTax = $salary * (22.5 / 100);
            return $incomeTax;
            break;

         case $salary >= 4664.68:
            $incomeTax = $salary * (27.5 / 100);
            return $incomeTax;
            break;

         default:
            break;
      }
   }



   $result = calculateIncomeTax(5000.5);
   echo $result;
   ?>
</body>

</html>