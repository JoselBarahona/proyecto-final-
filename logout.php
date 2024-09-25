<?php
session_start(); 


unset($_SESSION['usuario']);


header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
?>
