<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
session_start();

if(isset($_SESSION["ssusername"])) {
?>
<body>
    <h1>Welcome : <?php echo $_SESSION['ssusername']  ?> </h1> 
    
    <p><a href="insertEmployee.php">Add Employee</a></p>
    
    <p><a href="showEmployee.php">Show Employee</a></p>
    <br>
    <br>
    <br>
    <a href="actionLogout.php">Logout</a>
</body>
<?php
}else {
    echo "<h1>Please login first .</h1>";
    header( "refresh:2;url=loginpage.php" );
}
?>

</html>