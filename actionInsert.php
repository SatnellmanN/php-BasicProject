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
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];

  $sql = "SELECT id,firstname,lastname,email FROM employee WHERE firstname = '".$firstname."' and lastname ='".$lastname."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "Already Employee Name !!";
    header( "refresh:2;url=insertEmployee.php" );
  } else {
    $sql = "INSERT INTO employee (email, firstname, lastname) VALUES ('".$email."', '".$firstname."', '".$lastname."')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
    header( "refresh:2;url=insertEmployee.php" );
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header( "refresh:2;url=insertEmployee.php" );
}
  }
  $conn->close();
  //$conn->close();


} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

    
?>