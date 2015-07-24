<html>
<head>
	<style>
		td{
			font-size:22px;
			font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
		}
	table{
		position:relative;
		top:10px;
	}

	#status{
		color:red;
	}
	#status1{
		color:blue;
	}
	p{
		position:relative;
		top:360px;
		color:red;
	}
	#fail{
		position:relative;
		top:120px;
		font-size:30px;
		color:red;
	}
	a.book{
		text-decoration: none;
		font-size:17px;
	}
	</style>
</head>
<body>
	<center><p><button><A HREF="enterUr_id.php?" class="book">&nbsp &nbsp Back &nbsp&nbsp</A></button></p></center>
</body>
</html>

<?php

include "connection.php";

$test=$_POST['number'];
$sql="SELECT * FROM tablebooking where id=$test";
$res=mysqli_query($conn,$sql);
$noID="empty";
while ($row = mysqli_fetch_array($res))
{
	$noID="";
	print "
	<TABLE ALIGN = CENTER CALLPADDING = 10 border=1>
	<TR rowspan=2>
		<TD colspan=2><center> <font color=brown size=\"5\">Your Booking Details</font></center>
		</TD>
	</TR>
	<TR >
		
	</TR>
	<TR>
		<TD>ID</TD>
		<TD>$row[id]</TD>
	</TR>
	<TR>
		<TD>NAME</TD>
		<TD>$row[name]</TD>
	</TR>
	<TR>
		<TD>EMAIL</TD>
		<TD>$row[email]</TD>
	</TR>
	<TR>
		<TD>No Of Person's</TD>
		<TD>$row[persons]</TD>
	</TR>
	<TR>
		<TD>DATE</TD>
		<TD>$row[date1]</TD>
	</TR>
	<TR>
		<TD>TIME (24Hrs Format)</TD>
		<TD>$row[time]</TD>
	</TR>
	<TR >
		<TD id=status>BOOKING STATUS</TD>
		<TD id=status1>$row[status]</TD>
	</TR>
	";
}

print "</TABLE>";
if($noID)
	{
		echo"<pre><p id=fail>                Sorry...!!!
    Please Enter Your valid Booking ID</p></pre>";
	}
?>
