
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

echo "<center><p >BOOKING DETAILS</p></center><br>";

print "<TABLE ALIGN = CENTER CALLPADDING = 10 BORDER = 1 BORDERCOLOR = \"purple\">
<TR>
	<TD><B>Index</B></TD>
	<TD><B>ID</B></TD>
	<TD><B>NAME</B></TD>
	<TD><B>EMAIL</B></TD>
	<TD><B>No of Person's</B></TD>
	<TD><B>DATE</B></TD>
	<TD><B>TIME</B></TD>
	<TD><B>Booking Status</B></TD>
	<TD><B>DELETE</B></TD>
	<TD><B>EDIT</B></TD>
</TR>
";

$sql="SELECT * FROM tablebooking";
$res=mysqli_query($conn,$sql);
$counter=0;
while ($row = mysqli_fetch_array($res))
{
	$counter++;
	print "
	<TR>
		<TD><center>$counter</center></TD>
		<TD>$row[id]</TD>
		<TD><center>$row[name]</center></TD>
		<TD>$row[email]</TD>
		<TD><center>$row[persons]</center></TD>
		<TD>$row[date1]</TD>
		<TD>$row[time]</TD>
		<TD>$row[status]</TD>
		<TD><A HREF=\"delete.php?id=$row[id]\">Delete</A></TD>
		<TD><A HREF=\"edit.php?id=$row[id]\">Edit</A></TD>
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
