<?php 
session_start();
unset($_SESSION);
session_destroy();

header('Location: ../login.php?message=Log out successful');
?>