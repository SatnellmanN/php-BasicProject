<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.txtCenter {
    text-align: center;
}
</style>
<?php
session_start();
if(!isset($_SESSION["ssusername"])) {
?>
<body>

    <br>
    <br>
    <br>
    <br>
    <form name="frmUser" method="post" action="actionLogin.php">
    <div class="container txtCenter" style="width:100%">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <br>
        <br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br>
        <br>
        <button type="submit">Login</button>
        <br><br>
        <a href="CreateAccount.php">Register</a>
    </div>
    </form>

</body>
<?php
}else {
    header( "Location:index.php" );
}
?>
</html>