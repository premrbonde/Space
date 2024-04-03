<?php
session_start();

$uname = $_POST["username"];
$uemail = $_POST["useremail"];
$uadd = $_POST["useraddress"];
$ucity = $_POST["usercity"];
$ustate = $_POST["userstate"];
$uzipcode = $_POST["userzipcode"];
$umode = $_POST["mode"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "order";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO orderdata VALUES ('$uname', '$uemail', '$uadd ','$ucity ','$ustate','$uzipcode','$umode')";
if ($conn->query($sql) === TRUE) {
    header("Location: confirm.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
