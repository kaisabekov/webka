<?php
 
	if(!isset($_SESSION['user']))
	{
   		if($_GET['msg'] == "1")
   		print "<FONT COLOR=\"Green\">You have successfuly Logged out.</FONT>";
   		if($_GET['msg'] == "2")
   		print "<FONT COLOR=\"Red\">Please Login First.</FONT>";
   }
   ?>

<html>
<head>
	<style>
		center{
			position:relative;
			top:180px;
		}
		#admin{
			position:relative;
			left:50px;
			color:red;
			font-size:20px;
		}
	</style>
</head>
<body>
	<center>
		<form method=post action="login.php">
			<table>
				<tr>
					<td colspan="2" id="admin">Admin Login Details</td>
				</tr>
				<tr>
					<td colspan="2">...............................................................</td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="uname" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pwd" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="insert" value="Log In"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
