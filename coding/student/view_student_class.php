<?php 
include('../setting.php');
$test='../include/config.php';
include($test);
include('../include/function.php');
session_start();

$userid = $_SESSION['userId'];


	$sql3="SELECT studentName FROM student where matricID='".$userid."'";

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
<title>View Student Class</title>
</head>

<body>

  <?php 
  
 $matricID = $_SESSION['userId'];
  
  
  	
	$sql="SELECT matricID,className,streamName FROM student where matricID='".$matricID."'";

	//SQL STATEMENT END
	
	
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}?>
	
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
  
   <td>Matric ID</td>
    <td>Classs Name</td>
    <td>Stream Name</td>
	
  </tr>
   <?php $row = mysqli_fetch_row($result)   ?>
   
  <tr>
   
   
	<td><?php   echo $row[0]; ?></td>
    <td><?php   echo $row[1]; ?></td>
	<td><?php   echo $row[2]; ?></td>
  </tr>
  
  
  
  
</table>

</div>
			<div class="grid_1_of_2 images_1_of_2 img_style">
				<img src="../images/student1.jpg" alt="">
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


</body>
</html>