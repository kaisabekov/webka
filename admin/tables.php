<?php
	session_start();
	if(!$_SESSION['user'])
	{ 
		Header("Location: index.php?msg=2");
	}
?>

<html>
<head>
	<style>
		center.list{
			position:relative;
			top:150px;
		}
		a{
			text-decoration:none;
		}
		span,h3{
			font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
			color:#996600;
			font-size:25px;;
		}
		button{
			position:relative;
			font-size:18px;
			top:250px;
		}
	</style>
</head>
<body>

<center><h3 style="color:red;">Logged in as Admin<h3></center>
	<center class="list">
		<table>
			<tr rowspan="2">
				<td>

				</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td>
					<span><-- Please Select the required table from the database. --></span>
				</td>
			</tr>
			<tr><td>.....................................................................
					....................................................................</td></tr>
			<center>
			<tr>
				<td>
					<a href="menu.php?"><center>MENU Of LA VILLA IN THE SKY</center></a>
				</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td>
					<a href="insert.php?"><center>BOOKING DETAILS Of LA VILLA IN THE SKY</center></a>
				</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td>
					<a href="comment.php?"><center>COMMENTS From CUSTOMERS Of LA VILLA IN THE SKY</center></a>
				</td>
			</tr>
			<tr><td>.....................................................................
					....................................................................</td></tr>
			</center>
		</table>
	</center>
	<center><button><A HREF=logout.php? class=book>&nbsp &nbsp Log Out &nbsp&nbsp</A></button></center>

</body>
</html>
