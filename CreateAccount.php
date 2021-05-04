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

    <form class="modal-content" method="post" action="actionRegisForm.php">
    <div style="width:100%;text-align:right">
sessin Id : <?php echo $_SESSION['ssusername']  ?>
</div>
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <br><br>
            <label for="username"><b>UserName</b></label>
            <input type="text" placeholder="Enter UserName" name="username" required>
            <br><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br><br>
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            <br><br>
            <div class="clearfix">
                <button type="button" onclick="" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" name="submit">Sign Up</button>
            </div>
        </div>
    </form>


</body>
<?php
}else {
    echo "<h1>Please login first .</h1>";
    header( "refresh:2;url=loginpage.php" );
}
?>
</html>