
<?php
//editMenu.php
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

$code2=$_GET['code1'];

$res=mysqli_query($conn,"select * from menu1 where code='$code2'");
	$row = mysqli_fetch_array($res);
?>


<html>
<head>
	<style>
		a.book{
		text-decoration: none;
		font-size:14px;
	}
	center{
			position:relative;
			top:180px;
	}
	</style>
</head>
<body>

<CENTER>
	<FORM METHOD=POST ACTION="editMenu2.php">
	<INPUT TYPE ="HIDDEN" NAME="edit" VALUE = "<?php print $_GET['id'];?>">
		<TABLE>
			<TR>
				<TD>Id of CATEGORY</TD>
				<TD><INPUT NAME="id" VALUE = "<?php print $row['id'];?>"></TD>
			</TR>
			<TR hidden>
				<TD>Food Code</TD>
				<TD><INPUT NAME="code" VALUE = "<?php print $row['code'];?>"></TD>
			</TR>
			<TR>
				<TD>Food Item Name</TD>
				<TD><INPUT NAME="item" VALUE = "<?php print $row['item'];?>"></TD>
			</TR>
			<TR>
				<TD>Food Category</TD>
				<TD><INPUT NAME="category" VALUE = "<?php print $row['category'];?>"></TD>
			</TR>
			<TR>
				<TD>Price</TD>
				<TD><INPUT NAME="price" VALUE = "<?php print $row['price'];?>"></TD>
			</TR>
			<TD><button><A HREF=menu.php? class=book>&nbsp &nbsp Back &nbsp&nbsp</A></button></TD>
			<TD><INPUT TYPE ="submit" VALUE = "Update"></TD>
			</TR>
		</TABLE>
	</FORM>
</CENTER>
</body>
</html>
