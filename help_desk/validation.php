<?php

session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
   header('Location: index.php?loginError2=true');
}
