<HTML>
<HEAD><TITLE>Registration</TITLE>

<link rel="stylesheet" type="text/css" href="css/register.css">
</HEAD>
<BODY>



<div id="banner">
    <div id="banner-content">
    SMK NUR SCHOOL ONLINE
    </div>
  </div>

<div id="some">
<div id ="title"><h2>Registration Form</h2></div>



<div id="login">
<p>Please fill  the information:</p>
<p>You must fill the one with * sign:</p>
<FORM name="form1" method="POST" action="save_register.php" >
<TABLE border="0" cellspacing="10" >


<TR>
<TD><b>UserType: </TD>
<!--<TD><INPUT type="text" name="userType" size="3"></TD>-->
<TD><select name ="userType">
<option selected value="A">Student
<option value="T">Teacher
</select></TD>
</TR>


<TR>
<TD><b>Name: </TD>
<TD><INPUT type="text" name="name" size="20"></TD>
</TR>

<TR>
<TD><b>IC Number: </TD>
<TD><INPUT type="text" name="ICNumber" size="20"></TD>
</TR>


<TR>
<TD><b>Agama: </TD>
<!--<TD><INPUT type="text" name="userType" size="3"></TD>-->
<TD><select name ="agama">
<option selected value="Islam">Islam
<option value="Kristian">Kristian
<option value="Hindu">Hindu
<option value="Buddha">Buddha
</select></TD>
</TR>

<TR>
<TD><b>Kaum: </TD>
<!--<TD><INPUT type="text" name="userType" size="3"></TD>-->
<TD><select name ="kaum">
<option selected value="Melayu">Melayu
<option value="Ccina">Cina
<option value="India">India
<option value="Bumiputera">Bumiputera
</select></TD>
</TR>

<TR>
<TD><b>Street: </TD>
<TD><INPUT type="text" name="street" size="20"></TD>
</TR>



<TR>
<TD><b>Phone Number: </TD>
<TD><INPUT type="text" name="mobile" size="20"></TD>
</TR>


<TR>
<TD><b>Email: </TD>
<TD><INPUT type="text" name="email" size="20"></TD>
</TR>

<!--<TR>
<TD>Username</TD>
<TD><INPUT type="" name="username" size="8" style="text-transform:uppercase;"></TD>
</TR>-->
<TR>
<TD></TD><TD align="left"><BR><INPUT type="submit" name="button1" value="Submit"></TD>
</TR>
</TABLE>
</FORM>
</div>
</div>


</BODY>
</HTML>