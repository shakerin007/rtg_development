<?php   
session_start(); 
$username=$_SESSION['username'];
shell_exec("./remove_zip $username");
session_destroy(); 
header("location:login.html"); 
exit();
?>