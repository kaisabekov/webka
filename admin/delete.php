<?php
//delete.php
session_start();
	if(!$_SESSION['user'])
	{
		Header("Location: index.php?msg=2");
	}


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,"hotel");

$id=$_GET['id'];
$sql="DELETE FROM tablebooking WHERE id=$id";
mysqli_query($conn,$sql);

Header("Location:insert.php");

?>
