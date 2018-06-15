
<?php 
include('../setting.php');
$test='../include/config.php';
//echo $myurl;
//echo $test;
include($test);

include('../include/function.php');

session_start();

$userid = $_SESSION['userId'];


	$sql="SELECT studentName FROM student where matricID='".$userid."'";

	//SQL STATEMENT END
	
	
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	
	
	$sql2 ="select * from student where matricID='".$userid."'";
	
	$result2=mysqli_query($conn,$sql2);
	
	
	if (!$result2) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	
	$row = mysqli_fetch_row($result);
	
	$row2 = mysqli_fetch_row($result2);
	
	
	
	
	?>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Student Update</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="../css/style1.css" rel="stylesheet" type="text/css" media="all" />
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
		  	<li class="active"><a href="../teacher.php"><span>Home</span></a></li>
			<li><a href="studentupdate.php"><span>Profile</span></a></li>
			<li class="last"><a href="../contact2.php"><span>Contact</span></a></li>
			<li class="has-sub"><a href="../logout.php"><span>Logout</span></a></li>
			<li><a href="#nothing"><span><?php echo $row[0];?></span></a></li>
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
<div class="main">
		<div class="section group">				
				<div class="col span_1_of_2">
					

				   <div class="clear"></div>
				</div>				
				<div class="col span_2_of_4">
				  <div class="contact-form">
				  	<h2 class="style">Edit Your Profile Here</h2>
					       <form id="form1" name="form1" method="post" action="studentsaveinsert.php">
					    	<div>
						    	<span><label>Matric ID</label></span>
						    	<span><?php echo $row2[0]; ?></span>
						    </div>
						    <div>
						    	<span><label>Student Name</label></span>
						    	<span><input name="txtName" type="text" class="textbox" value="<?php echo $row2[1]; ?>"></span>
						    </div>
						    <div>
						     	<span><label>PassWord</label></span>
						    	<span><input name="txtpassword" type="text" class="textbox" value="<?php echo $row2[2]; ?>"></span>
						    </div>
						    <div>
						     	<span><label>IC Number</label></span>
						    	<span><input name="ICNumber" type="text" class="textbox"  value="<?php echo $row2[3]; ?>"></span>
						    </div>
						   <div>
						     	<span><label>Street</label></span>
						    	<span><input name="street" type="text" class="textbox"  value="<?php echo $row2[7]; ?>"></span>
						    </div>
							<div>
						     	<span><label>State</label></span>
						    	<span><input name="state" type="text" class="textbox"  value="<?php echo $row2[8]; ?>"></span>
						    </div>
							<div>
						     	<span><label>HandPhone Number</label></span>
						    	<span><input name="mobile" type="text" class="textbox"  value="<?php echo $row2[10]; ?>"></span>
						    </div>
							<div>
						     	<span><label>Email</label></span>
						    	<span><input size="15" name="email" type="text" class="textbox"  value="<?php echo $row2[11]; ?>"></span>
						    </div>
						   <div>
						   		
                                <span><input type="submit" name="Save" id="Save" value="Save" class="btn btn_s" /></span>
         
                                
						  </div>
					    </form>
				    </div>
  				</div>		
  			<div class="clear"></div>
		  </div>
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