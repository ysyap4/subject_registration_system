<?php 
include('../setting.php');
$test='../include/config.php';
include($test);
include('../include/function.php');
session_start();

$userid = $_SESSION['userId'];


	$sql3="SELECT staffName FROM teacher where staffNo='".$userid."'";

	//SQL STATEMENT END
	
	
	$result3=mysqli_query($conn,$sql3);
	if (!$result3) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	$row3 = mysqli_fetch_row($result3)




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="../css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<title>View Class Teacher</title>
</head>

<body>

  <?php 
  
 $staffID = $_SESSION['userId'];
  
  
  	
	$sql="SELECT class_sub_teacher.staffNo, teacher.staffName,class_sub_teacher.classSubTCode, class_sub_teacher.className,  class_sub_teacher.subjectCode FROM class_sub_teacher INNER JOIN teacher ON class_sub_teacher.staffNo=teacher.staffNo WHERE class_sub_teacher.staffNo='".$staffID."'";
    
	//SQL STATEMENT END
	
	
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	
	
	$sql2 = "SELECT className, COUNT(matricID) FROM student GROUP BY className";
	
	$result2=mysqli_query($conn,$sql2);
	if (!$result2) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	$x = 1;
	
	?>
	
	<div class="wrap">
<div class="wrapper">
<div class="logo">
	<a href="../teacher.php"><h1>Master(Teacher)</h1></a>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		  	<li class="active"><a href="../teacher.php"><span>Home</span></a></li>
			<li><a href="../teacher/teacherupdate.php"><span>Profile</span></a></li>
			<li class="last"><a href="../contact.php"><span>Contact</span></a></li>
			<li class="has-sub"><a href="../logout.php"><span>Logout</span></a></li>
			<li><a href="#nothing"><span><?php echo $row3[0];?></span></a></li>
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
				<h2 class="style">About Erudite</h2>
	
	
	
	
	
	
	
	
	<table class="table table-striped">
  <tr class ="success">
   
	<td>Staff No</td>
	 <td>Staff Name</td>
	  <td>ClassSubTCode</td>
     <td>Subject Class Name</td>
	  <td>Subject Code</td>
  </tr>
   <?php $row = mysqli_fetch_row($result)   ?>
   
  <tr>
   
   
	<td><?php   echo $row[0]; ?></td>
    <td><?php   echo $row[1]; ?></td>
	<td><?php   echo $row[2]; ?></td>
	<td><?php   echo $row[3]; ?></td>
	<td><?php   echo $row[4]; ?></td>
  </tr>
  
  
  
  
</table>
<br>
<table class="table table-striped">
  <tr class ="success">
   
	<td>Class Name</td>
	 <td>No of Student</td>
  </tr>
  <?php while($row2 = mysqli_fetch_row($result2))  { ?>
  <tr>
   
   
	<td><?php   echo $row2[0]; ?></td>
    <td><?php   echo $row2[1]; ?></td>
	
  </tr>
  
  <?php
   
    $x = $x + 1;
   } ?>
  
  
</table>
</div>
			<div class="grid_1_of_2 images_1_of_2 img_style">
				<img src="../images/teacher1.jpg" alt="">
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
		<a href="../teacher.php"><h2>Master</h2></a>
		<div class="copy">
			<p class="w3-link">© All Rights Reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
</body>
</html>


</body>
</html>