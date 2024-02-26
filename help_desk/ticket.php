<?php
session_start();

if (!empty($_POST)) {

   $title = $_POST['title'];
   $description = $_POST['description'];
   $category = intval($_POST['category']);
}

switch (intval($_POST['category'])) {
   case 1:
      $category = 'Criação Usuário';
      break;
   case 2:
      $category = 'Impressora';
      break;
   case 3:
      $category = 'Hardware';
      break;
   case 4:
      $category = 'Criação Usuário';
      break;
}

$file = fopen('ticket.txt', 'a');
$formattedText =  $_SESSION['id'] . ":" . $title . ":" .  $description . ":" . $category . PHP_EOL;

fwrite($file, $formattedText);
fclose($file);

header('Location: home.php');
