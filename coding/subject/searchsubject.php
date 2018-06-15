<?php 
include('../setting.php');
$test='../include/config.php';
include($test);
include('../include/function.php');
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Subject</title>
</head>

<body>

<form action="searchsubject.php" method="post">
<table width="320" border="1">
  <tr>
    <td width="106">Search</td>
<TD><select name ="stream">
<option selected value="Sains Tulen">Sains Tulen
<option value="Perakaunan">Perakaunan
<option value="Sastera">Sastera
</select>
 <input name="search" 
      type="submit" value="search" />
</TD>
 



 </tr>
  
</table>

<p>&nbsp;</p>
</form>


<br><br>


  <?php 
  
  
  if (isset($_POST['stream'])){
$stream=$_POST['stream'];
  	
	$sql="SELECT * FROM subject where streamName='".$stream."'";

	//SQL STATEMENT END
	

	$x = 1;
	
	$sql = "SELECT * FROM subject where streamName='".$stream."'";
	
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}?>
	<table width="541" height="85" border="1">
  <tr>
   <td>No</td>
	<td>Subject Code</td>
    <td>Subject Name</td>
    
  </tr>
   <?php while($row = mysqli_fetch_row($result))  { ?>
  <tr>
   
    <td><?php   echo $x; ?></td>
	<td><?php   echo $row[0]; ?></td>
    <td><?php   echo $row[1]; ?></td>
	
   
    
  </tr>
  <?php
   
    $x = $x + 1;}
   } ?>
</table>
</body>
</html>