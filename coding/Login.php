<?php 
include('/setting.php');
$test='/include/config.php';
//echo $myurl;
//echo $test;
include($test);

include('/include/function.php');

session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daily UI - Day 1 Sign In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<?php

if (isset($_SESSION['userId'])){
	$to=$_SESSION['interface'];
	gotoInterface($to);
}

?>

<?php
$db = mysqli_select_db($conn,"db_mzbnz23");

 
 if (isset($_POST['txtUsername']))
{
	$userid=$_POST['txtUsername']; //USER INPUT
	$pass=$_POST['txtPassword'];  //PASSWORD INPUT
 
 
$user = substr($userid,0,1);

 echo $user;
 echo "<br>";
 //SQL EXECUTE 

 
if($user == "T"){
 $result = mysqli_query($conn,"select staffNo,staffName,password from teacher where staffNo='".$userid."' and password ='".$pass."'");

 $_SESSION['usertype'] = $user;
 }


 if($user == "A"){
 $result = mysql_query($conn,"select matricID,studentName,password from student where matricID='".$userid."' and password ='".$pass."'");
 
 }
 
 
 if($user == "S"){
 $result = mysqli_query($conn,"select staffNo,staffName,password from secretary where staffNo='".$userid."' and password ='".$pass."'");
 
 }
 
 if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
		echo $result;
    	echo "First";
	}
	
$row = mysqli_fetch_row($result);
	$userId=$row[0];
	$name=$row[1];
	
//session_register("uName");
	$_SESSION['userId']=$userId;
	$_SESSION['name']=$name;
	
	
	$result1=mysqli_query($conn,"select interface from category where userType='".$user."'");
	$row1 = mysqli_fetch_row($result1);
	
	
	
	if (!$result1) {
    	echo 'Could not run query: ' . mysqli_error($conn);
		echo "Second";
    	exit;
	}
	
	
	
	
	echo $row[2];
	if (empty($row[2])){  
		
		echo 'No such user.Login Again';
		$to = 'Login.php';
	    gotoInterface($to);
	}else
	{
		$to=$row1[0];
	    $_SESSION['interface']=$to;
		gotoInterface($to);
	
		//call a function
	}

}
else{
?>
<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">SMK Nur <span>Registration System</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form id="form1" name="form1" method="POST" action="Login.php" >
			<label for="username">Username</label>
			<br/>
			<input type="text" name="txtUsername" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="txtPassword" id="password">
			<br/>
			<button type="submit">Sign In</button>
			<br/>
			
			<a href="register/register_form.php"><p class="small">Register</p></a>
			</form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>
<?php 
}

mysqli_close($conn);
?>
</html>