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
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['psw'];
  $msg="Save Success : " . $email;

  $sql = "SELECT id,username FROM UserLogin WHERE username = '".trim($username)."' OR email ='".$email."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    //}
    //die("Already UserName OR Email !!");
    echo "Already UserName OR Email !!";
    header( "refresh:2;url=CreateAccount.php" );
  } else {
    $sql = "INSERT INTO UserLogin (email, username, password) VALUES ('".$email."', '".$username."', '".$password."')";
    
    header( "refresh:2;url=loginpage.php" );
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
    header( "refresh:2;url=loginpage.php" );
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header( "refresh:2;url=CreateAccount.php" );
}
  }
  $conn->close();
  


  echo $msg ;
  //$conn->close();


} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

    
?>