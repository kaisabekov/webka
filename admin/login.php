<?php
	session_start();

//$_SESSION['user']=$_POST['uname'];
$_SESSION['user']="root";

$servername = "localhost";
$username = $_POST['root'];
$password = $_POST[''];


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    Header("Location:tables1.php");
}
mysqli_select_db($conn,"hotel");

Header("Location:tables.php");

?>
