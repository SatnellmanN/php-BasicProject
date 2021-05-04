<?php
    $servernamedb = "localhost";
    $usernamedb = "root";
    $passworddb = "";
    
    try {
        //set connection
        $conn = new mysqli($servernamedb, $usernamedb, $passworddb, "basicemployee");
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      //echo "Connected successfully";
      $username = $_POST['username'];
      $password = $_POST['password'];
    
      $sql = "SELECT id,username,password FROM UserLogin WHERE username = '".trim($username)."' AND password ='".$password."'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        //echo $result;
        //session_start();
        //$_SESSION['ssusername'] = $rowlogin['user'];  

        header( "Location:index.php" );
      } else {
        echo "Invalid UserName or Password";
        header( "refresh:2;url=loginpage.php" );
    
      }
      $conn->close();
      //$conn->close();
    
    
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    
?>