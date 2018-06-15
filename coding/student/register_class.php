<?php 
include('../setting.php');
$test='../include/config.php';
include($test);
include('../include/function.php');
session_start();

$userid = $_SESSION['userId'];


	$sql4="SELECT studentName FROM student where matricID='".$userid."'";

	//SQL STATEMENT END
	
	
	$result4=mysqli_query($conn,$sql4);
	if (!$result4) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	$row4 = mysqli_fetch_row($result4)



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Student Register Class</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="../css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>

<div class="wrap">
<div class="wrapper">
<div class="logo">
	<a href="../student.php"><h1>Master(Student)</h1></a>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		  	<li class="active"><a href="../student.php"><span>Home</span></a></li>
			<li><a href="../student/studentupdate.php"><span>Profile</span></a></li>
			<li class="last"><a href="../contact2.php"><span>Contact</span></a></li>
			<li class="has-sub"><a href="../logout.php"><span>Logout</span></a></li>
			<li><a href="#nothing"><span><?php echo $row4[0];?></span></a></li>
			<div class="clear"></div>
		 </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
	<div class="main1">
			<div class="grid_1_of_2 images_1_of_2">
				<h2 class="style">Register Class</h2>




<form action="register_class.php" method="post">
<table class="table">
  <tr class ="success">
    <td width="106">Search</td>
<TD><select name ="class">
<option selected value="5 Perdana">5 Perdana
<option value="5 Putra">5 Putra
<option value="5 Persona">5 Persona
<option value="5 Chimera">5 Chimera
<option value="5 Wira">5 Wira
<option value="5 Waja">5 Waja
</select>
 <input name="search" 
      type="submit" value="search" class="btn btn_s"/>
</TD>
 



 </tr>
  
</table>

<p>&nbsp;</p>
</form>


<br><br>


  <?php 
  
  
  if (isset($_POST['class'])){
$class=$_POST['class'];
  	
	
	
	//SQL STATEMENT END
	
	$sql2="SELECT subjectCode FROM class_sub_teacher where className='".$class."'";
	
$result2=mysqli_query($conn,$sql2);
	if (!$result2) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	
	$sql="SELECT className,streamName FROM class where className='".$class."'";

	
	//SQL STATEMENT END
	
	$x = 1;
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}?>
	
	<table class="table table-striped">
  <tr class="success">
   <td>No</td>
	<td>Class Name</td>
    <td>Stream Name</td>
    <td colspan="10" align ="center">Subject Code</td>
	
  </tr>
   <?php while($row = mysqli_fetch_row($result))  { ?>
  <tr>
   
    <td><?php   echo $x; ?></td>
	<td><?php   echo $row[0]; ?></td>
    <td><?php   echo $row[1]; ?></td>
	
    <?php while($row2 = mysqli_fetch_row($result2))  { ?>
	
	<?php   $subjectcodee = $row2[0]; 
	
	
	$sql3="SELECT subjectName FROM subject WHERE subjectCode = '".$subjectcodee."'";
    
	
	//SQL STATEMENT END
	
	
	$result3=mysqli_query($conn,$sql3);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	
	 $row3 = mysqli_fetch_row($result3)
	
	
	?>
	
	<td><?php   echo $row3[0]; ?></td>
	
	<?php
   
    
   } ?>
  </tr>
  <?php
   
    $x = $x + 1;}
   } ?>
   </table>
<form action="save_class.php" method="post">
<p>Please Select Which class you want to take</p>
<table class="table table-striped">

<tr class="success">
<td>Class</td>
</tr>

 <tr class="success">
    <td width="106">Choose Class</td>
<TD><select name ="class">
<option selected value="5 Perdana">5 Perdana
<option value="5 Putra">5 Putra
<option value="5 Persona">5 Persona
<option value="5 Chimera">5 Chimera
<option value="5 Wira">5 Wira
<option value="5 Waja">5 Waja
</select>
 <input name="save" 
      type="submit" value="save" class="btn btn_s" />
</TD>
 



 </tr>

</table>
</form>
   
   	</div>
			<div class="grid_1_of_2 images_1_of_2 img_style">
				<img src="../images/student2.jpg" alt="">
			</div>
			<div class="clear"></div>
	</div>
</div>
</div>
</div>
<div class="wrap">
<div class="wrapper">
	<div class="footer">
		<div class="social-icons">
	   		  	<ul>
			      <li class="icon_1"><a href="#" target="_blank"> </a></li>
			      <li class="icon_2"><a href="#" target="_blank"> </a></li>
			      <li class="icon_3"><a href="#" target="_blank"> </a></li>
			      <li class="icon_4"><a href="#" target="_blank"> </a></li>
			      <div class="clear"></div>
		     </ul>
	   	 </div>
		<a href="../student.php"><h2>Master</h2></a>
		<div class="copy">
			<p class="w3-link">© All Rights Reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
</body>
</html>