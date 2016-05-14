<Doctype html>
<head>
  <style>
    td{
    	font-size:21px;
    	font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
    }
    input{font-size:17px;}
    span,p{color:red;}
    #contact{
    	font-size:19px;
    	font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
    }
    #name{
      color:blue;
    }
    div{
      font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
      font-size:22px;
    }
  </style>
</head>
<body>
<center> <font color="brown" size="5">Customers are requested to provide their Unique Booking ID</font></center>
<br><br>

<CENTER >
  <FORM METHOD="POST" ACTION="comment2.php">
    <TABLE>
      <TR>
        <TD>Booking ID<span>*</span></TD>
        <TD><INPUT TYPE ="number" NAME="id" required></TD>
      </TR>
      <TR>
        <TD>Your Comment<span>*</span></TD>
        <TD><textarea name="message" rows="6" cols="29" REQUIRED></textarea></TD>
      </TR>
      <TR>
        <TD>.........................</TD>
        <TD>...........................................</TD>
      </TR>
      <TR>
        <TD><center><INPUT TYPE ="reset" VALUE = "Clear"></center></TD>
        <TD><center><INPUT TYPE ="submit" VALUE = "Submit" name="insert"></center></TD>
      </TR>
    </TABLE>
  </FORM>
</CENTER>
<marquee direction="up" height="200px" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">

  <?php

include "connection.php";

$sql="SELECT * FROM visitorcomment";
$res=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($res))
{
  $id=$row['id'];
  $name=$row['name'];
  $comment=$row['comment'];
  $total="
  <div>
   <span id=name>$name</span>"." with Booking Id= "."<span id=id>$id</span>"."
   &nbsp Commented -->"."<span id=name> $comment</span>
  </div>  ";
  print $total;
  print "<br>";
}

?>

</marquee>
</body>
</html>
