<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

    $servernamedb = "localhost";
    $usernamedb = "root";
    $passworddb = "";
    $conn = new mysqli($servernamedb, $usernamedb, $passworddb, "basicemployee");
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT id,firstname,lastname,email FROM employee";
      $result = $conn->query($sql);

session_start();
if(isset($_SESSION["ssusername"])) {


?>
<style>
      .txtCenter {text-align:center;}
</style>
<body>
<form class="modal-content" method="post" action="">
<div style="width:100%;text-align:right">
sessin Id : <?php echo $_SESSION['ssusername']  ?>
</div>
<h1>All Employees</h1>

    <table border="1">
        <thead>
            <tr>
                <td>No.</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
        <?php
        $inx = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $inx++;
           echo "<tr><td class=\"txtCenter\">".$inx."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
            }
        }
        ?>
        </tbody>
    </table>
    <br>
    <a href="index.php">Back</a>
    </form>
</body>
<?php
}else {
    echo "<h1>Please login first .</h1>";
    header( "refresh:2;url=loginpage.php" );
}
?>
</html>