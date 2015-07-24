
<?php
//edit.php
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

$id1=$_GET['id'];
$res=mysqli_query($conn,"select * from tablebooking where id=$id1");
	$row = mysqli_fetch_array($res);
?>


<html>
<head>
	<style>
		center{
			position:relative;
			top:180px;
		}
		a.book{
		text-decoration: none;
		font-size:14px;
	}
	</style>
</head>
<body>

<CENTER>
	<FORM METHOD=POST ACTION="edit2.php">
	<INPUT TYPE ="HIDDEN" NAME="edit" VALUE = "<?php print $_GET['id'];?>">
		<TABLE>
			<TR>
				<TD>Booking Id</TD>
				<TD><INPUT NAME="id" VALUE = "<?php print $row['id'];?>"></TD>
			</TR>
			<TR>
				<TD>Update Booking Status</TD>
				<TD><INPUT TYPE ="text" NAME="status" VALUE = "<?php print $row['status'];?>" required></TD>
			</TR>
			<TD><button><A HREF=insert.php? class=book>&nbsp &nbsp Back &nbsp&nbsp</A></button></TD>
			<TD><INPUT TYPE ="submit" VALUE = "Update"></TD>
			</TR>
		</TABLE>
	</FORM>
</CENTER>
</body>
</html>
