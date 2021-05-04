<?php 
session_start();
unset($_SESSION["ssusername"]);
header("Location:loginpage.php");


?>