<?php
//edit2.php

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

$id=$_POST['id'];
$sql = "UPDATE tablebooking SET status = '$_POST[status]' WHERE id = $id";

mysqli_query($conn,$sql);
//session_destroy();
Header("Location:insert.php");

?>