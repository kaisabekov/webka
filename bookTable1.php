<html>
<style>
	a.book{
		text-decoration: none;
	}
	#test{
		position:relative;
		top:120px;
	}
	p{
		font-size:22px;
	}
</style>
<body>
<?php

include "connection.php";

id:
$id=mt_rand();
$res=mysqli_query($conn,"select id from tablebooking");
while ($row = mysqli_fetch_array($res))
{
	if($id == $row['id'])
	{
		goto id;
	}
}
if(isset($_POST['insert']))
{	
	$fname=$_POST['name'];
	$email=$_POST['email'];
	$person=$_POST['persons'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$status="Pending";
	$sql=mysqli_query($conn,"INSERT INTO tablebooking(id,name,email,persons,date1,time,status) VALUES('$id','$fname','$email','$person','$date','$time','$status')");
	
}

?>
<br><br>
<center id="test">
<p><?php echo "Your Booking ID is = $id"; ?></p>
<button><A HREF="bookTable.php?" class="book">Book Another Table</A></button>
</center>
</body>
</html>