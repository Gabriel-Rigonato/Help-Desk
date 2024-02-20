<?php

session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] !== 1) {
   // header('Location: index.php?loginError2=true');
}
