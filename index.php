<?php
ob_start(); header('Location: index.html'); ob_end_flush();
$servername = "localhost";
$username = "id14342607_getmail";
$password = "task12*Data12";
$database = "id14342607_useremail";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "INSERT INTO email_data (email)
  VALUES ('".$_POST["user_email"]."')";
  // use exec() because no results are returned
  $conn->exec($sql);
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>