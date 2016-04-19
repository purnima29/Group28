<?php 
Session_start();
session_destroy();
header("location:stulog.php");
?>