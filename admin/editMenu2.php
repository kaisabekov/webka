<?php
session_start();
	if(!$_SESSION['user'])
	{
		Header("Location: index.php?msg=2");
	}


$servername = "localhost";
$username = "root";
$password = "kiit";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,"hotel");

$code1=$_POST['code'];
$sql = "UPDATE menu1 SET price = '$_POST[price]' WHERE code = '$code1'";

mysqli_query($conn,$sql);

Header("Location:menu.php");

?>