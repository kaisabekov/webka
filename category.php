
<html>
<head>
<style>
  img{
     width: 200px;
    height: auto;
  }
</style>
</head>
<body>
<?php

include "connection.php";

print "<TABLE ALIGN=CENTER CALLPADDING=5 border=3 bordercolor=\"#0099CC\">
<TR>
  <TD><B>IMAGE</B></TD>
  <TD><B>NAME</B></TD>
  <TD><B>PRICE (Rs.)</B></TD>
</TR>
";

$sql="SELECT * FROM menu1 where id='$_GET[id]'";
$res=mysqli_query($conn,$sql);
$counter=0;
while ($row = mysqli_fetch_array($res))
{
  $test1=$row['category'];
  $test=$row['code'].".jpg";
  print "
  <TR>
     <TD><img src=$test1/$test></TD>
     <TD><b>$row[item]</b></TD>
    <TD><b>$row[price]</b></TD>
  </TR>
  ";
}
print "</TABLE>";
?>
<center>
</center>

</body>
</html>
