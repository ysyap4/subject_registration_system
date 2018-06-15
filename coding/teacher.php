<?php 
include('/setting.php');
$test='/include/config.php';
//echo $myurl;
//echo $test;
include($test);

include('/include/function.php');

session_start();

$userid = $_SESSION['userId'];


	$sql="SELECT staffName FROM teacher where staffNo='".$userid."'";

	//SQL STATEMENT END
	
	
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	$row = mysqli_fetch_row($result)
	
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
<title>Master Teacher page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script type='text/javascript' src="js/jquery.min.js"></script>
    <script type='text/javascript' src="js/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="js/jquery.easing.1.3.js"></script> 
    <script type='text/javascript' src="js/camera.min.js"></script> 
      <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: 'auto',
				loader: 'bar',
				pagination: false,
				thumbnails: true,
				hover: false,
				opacityOnGrid: false,
				imagePath: '../images/'
			});

		});
	</script>
</head>
<body>
<div class="wrap">
<div class="wrapper">
<div class="logo">
	<a href="teacher.php"><h1>Master(Teacher)</h1></a>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		  	<li class="active"><a href="teacher.php"><span>Home</span></a></li>
			<li><a href="teacher/teacherupdate.php"><span>Profile</span></a></li>
			<li class="last"><a href="contact.php"><span>Contact</span></a></li>
			<li class="has-sub"><a href="logout.php"><span>Logout</span></a></li>
			<li><a href="#nothing"><span><?php echo $row[0];?></span></a></li>
			<div class="clear"></div>
		 </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
<div class="fluid_container">
   <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
          <div data-src="images/slider1.jpg"> </div>
            <div data-src="images/slider2.jpg"> </div>
            <div  data-src="images/slider3.jpg"> </div>
  </div>
</div>
	<div class="clear"></div>
<div class="wrap">
<div class="wrapper">
<div class="main_text">
		<h2>A place of light, of liberty, and learning</h2>
		<h3>we provide leading intensive courses</h3>
	</div>	
	<div class="grids_1_of_4">
				<div class="grid_1_of_4 images_1_of_4 bg1">
					 <img src="images/icon1.png">
				</div>
				<div class="grid_1_of_4 images_1_of_4 bg2">
					 <img src="images/icon2.png">
				</div>
				<div class="grid_1_of_4 images_1_of_4 bg3 hide">
					 <img src="images/icon3.png">
				</div>
				<div class="grid_1_of_4 images_1_of_4 bg4 hide">
					 <img src="images/icon4.png">
				</div>
			<div class="clear"></div>
			</div>
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Nothing</h3>
					<p>Nothing Particular.</p>
					
					<div class="button">
						<a href="details.html">learn more</a>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Teacher Register Subject</h3>
					<p>Teacher can register their subject through here. There many subject that teacher can choose based on the teacher interest.</p>
					<div class="button">
						<a href="teacher/teacher_list_class.php">learn more</a>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4 hide">
					<h3>View Class Subject</h3>
					<p>Teacher can view all the class that based on the subject that the teacher taken.</p>
					<div class="button">
						<a href="teacher/view_class_teacher.php">learn more</a>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4 hide">
					<h3>Nothing</h3>
					<p>Nothing Particular.</p>
					<div class="button">
						<a href="details.html">learn more</a>
					</div>
						
				</div>
			<div class="clear"></div>
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
		<a href="teacher.php"><h2>Master</h2></a>
		<div class="copy">
			<p class="w3-link">© All Rights Reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
</body>
</html>