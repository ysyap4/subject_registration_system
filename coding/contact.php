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
<title>Master Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
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
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
		<div class="section group">				
				<div class="col span_1_of_2">
					<div class="contact_info">
			    	 	<h2 class="style">Find Us Here</h2>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color: #1ABC9C;text-align:left;font-size:13px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h2 class="style">School Address </h2>
						<p>Jalan Damai Utama, Taman Nusa Damai,</p>
						<p>81700 Pasir Gudang, Johor,</p>
						<p>MALAYSIA</p>
				   		<p>Phone:+60 7-251 2340</p>			 
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				   <div class="clear"></div>
				</div>				
				<div class="col span_2_of_4">
				  <div class="contact-form">
				  	<h2 class="style">Contact Us</h2>
					       <form method="post" action="contact-post.html">
					    	
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<a href="" class="btn btn_s">send me</a>
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