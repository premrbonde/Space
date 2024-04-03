<?php
include "db_conn.php";
$a = $_POST['firstname'];
$b = $_POST['lastname'];
$c = $_POST['email'];
$d = $_POST['country'];
$e = $_POST['subject'];

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} 
else {
    $stmt = $conn->prepare("INSERT INTO feedback(`FirstName`, `LastName`, `Email`, `Country`, `Subject`) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss",$a,$b,$c,$d,$e );
    $execval = $stmt->execute();
    echo $execval;
    header("Location: feedform.php?msg=Feedback Submitted Successfully!");
    $stmt->close();
} 

mysqli_close($conn);
?>