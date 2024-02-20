
<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$usersValidated = array(
   array("id" => 1, "username" => "admin@letmein.com.br", "password" => "102030"),
   array("id" => 2, "username" => "user@php.com", "password" => "102030"),
   array("id" => 3, "username" => "user2@php.com", "password" => "102030"),
);

$userAuthenticated = false;
$userId = null;

foreach ($usersValidated as $user) {
   if ($user['username'] == $username && $user['password'] == $password) {
      $userAuthenticated = true;
      $userId = $user['id'];
   }
}

if ($userAuthenticated) {
   $_SESSION['auth'] = true;
   $_SESSION['id'] = $userId;
   header('Location: home.php');
} else {
   $_SESSION['auth'] = false;
   header('Location: index.php?loginError=true');
}

?>