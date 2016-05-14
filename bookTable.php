<html>
<head>
  <style>
    td{font-size:22px;}
    input{font-size:17px;}
    p{color:red;}
  </style>
</head>
<body>
<center> <font color="brown" size="5">BOOK Your Table So That We Can Serve You Better</font></center>
<br><br>
<-- -->
<CENTER >
  <FORM METHOD=POST ACTION="bookTable1.php" >
    <INPUT TYPE ="HIDDEN" NAME="edit" VALUE = "<?php print $_GET['id'];?>">
    <TABLE>
      <TR>
        <TD>Name</TD>
        <TD><INPUT TYPE ="text" NAME="name" required></TD>
      </TR>
      <TR>
      <TR>
        <TD>Email</TD>
        <TD><INPUT TYPE ="email" NAME="email" required></TD>
      </TR>
      <TR>
        <TD>No. Of Person's</TD>
        <TD><INPUT TYPE ="number" NAME="persons" min="1" max="50" required></TD>
      </TR>
      <TR>
        <TD>Date</TD>
        <TD><INPUT TYPE ="date" NAME="date" required></TD>
      </TR>
      <TR>
        <TR>
        <TD>Time</TD>
        <TD><INPUT TYPE ="time" NAME="time" required></TD>
      </TR>
      <TR>
        <TD>.........................</TD>
        <TD>.................................................</TD>
      </TR>
      <TR>
        <TD><INPUT TYPE ="reset" VALUE = "Clear"></TD>
        <TD><INPUT TYPE ="submit" VALUE = "Submit" name="insert"></TD>
      </TR>
    </TABLE>
  </FORM>
</CENTER>
</form>
<br><br><br>
<P>NOTE: After submitting the details you will be provided with an unique BOOKING ID as your Identity. &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp You can check your Booking Status using that ID.</P>
</body>
</html>
