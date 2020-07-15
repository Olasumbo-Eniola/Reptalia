<?php
 header("Location: index.html");
$servername = "localhost";
$username = "id14342607_root";
$password = "kafilat12*Sumbo";
$dbname ="id14342607_mydb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO getemail (email)
  VALUES ('".$_POST["user_email"]."')";
  // use exec() because no results are returned
  $conn->exec($sql);
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
 ?>
   