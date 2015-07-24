
<?php

include "connection.php";

$id=$_POST['id'];
$sql="SELECT name FROM tablebooking where id=$id";
$res=mysqli_query($conn,$sql);
$noID="empty";
while ($row = mysqli_fetch_array($res))
{
	$noID="";
		$id1=$_POST['id'];
		$name=$row['name'];
		$msg=$_POST['message'];
		$sql=mysqli_query($conn,"INSERT INTO visitorcomment(id,name,comment) VALUES('$id1','$name','$msg')");
		header("location:comment1.php");
}

print "</TABLE>";
if($noID)
	{
		echo"<center><p id=fail>Sorry we are unable to recieve your comment...!!!!<br>
		Please Enter Your valid Booking ID</p></center>";
	}
?>


<html>
<head>
	<style>
	p{
		font-size:22px;
		font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
		position:relative;
		top:120px;
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
	<center><p><button><A HREF="comment1.php?" class="book">&nbsp &nbsp Back &nbsp&nbsp</A></button></p></center>
</body>
</html>