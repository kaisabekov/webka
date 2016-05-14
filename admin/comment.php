
<?php

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

echo "<center><p >COMMENTS DETAILS</p></center><br>";

print "<TABLE ALIGN = CENTER CALLPADDING = 10 BORDER = 1 BORDERCOLOR = \"blue\">
<TR>
	<TD><B>Index</B></TD>
	<TD><B><center>BOOKING ID Of CUSTOMERS</center></B></TD>
	<TD><B><center>CUSTOMERS NAME</center></B></TD>
	<TD><B><center>COMMENTS From CUSTOMERS</center></B></TD>
	<TD><B>DELETE</B></TD>
</TR>
";

$sql="SELECT * FROM visitorcomment";
$res=mysqli_query($conn,$sql);
$counter=0;
while ($row = mysqli_fetch_array($res))
{
	$counter++;
	print "
	<TR>
		<TD><center>$counter</center></TD>
		<TD><center>$row[id]</center></TD>
		<TD><center>$row[name]</center></TD>
		<TD><center>$row[comment]</center></TD>
		<TD><A HREF=\"deleteComment.php?id=$row[id]\">Delete</A></TD>
	</TR>
	";
}
print "</TABLE>";
echo "<p><center><button><A HREF=tables.php? class=book>&nbsp &nbsp Back &nbsp&nbsp</A></button></center></p>";
echo "<p><center><button><A HREF=logout.php? class=book>&nbsp &nbsp Log Out &nbsp&nbsp</A></button></center></p>";

?>
<html>
<head>
	<style>
		p{
			color:red;
			font-size:18px;
		}
		a{
		text-decoration: none;
		font-size:17px;
	}
	</style>
</head>
<body>

</body>
</html>
