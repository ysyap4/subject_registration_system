<?php 
include('/setting.php');
$test='/include/config.php';
//echo $myurl;
//echo $test;
include($test);

include('/include/function.php');

session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!--meta data-->
<link rel="stylesheet" type="text/css" href="css/styless.css">
<title>Login </title>
</head>

<?php

if (isset($_SESSION['userId'])){
	$to=$_SESSION['interface'];
	gotoInterface($to);
}

?>


<?php
$db = mysqli_select_db($conn,"school");

 
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
 $result = mysqli_query($conn,"select matricID,studentName,password from student where matricID='".$userid."' and password ='".$pass."'");
 
 }
 
 
 if($user == "S"){
 $result = mysqli_query($conn,"select staffNo,staffName,password from secretary where staffNo='".$userid."' and password ='".$pass."'");
 
 }
 
 if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
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
    	exit;
	}
	
	
	
	
	echo $row[2];
	if (empty($row[2])){  
		
		echo 'No such user.Login Again';
		$to = 'user.php';
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
<div id ="back">


<div id="banner">
    <div id="banner-content">
    SMK NUR Registration Subject
    </div>
  </div>
  
 <div id="some">
  <div id ="login">
  
<form id="form1" name="form1" method="POST" action="user.php" >
  <p>Please enter your username and password</p>
  <p>Username:  <input name="txtUsername" type="text" /></p>
  <p>Password:  &nbsp <input name="txtPassword" type="password" /></p>
  
  
<input name="btnLogin" type="submit" value="Login"   id="color"/>


<a href="register/register_form.php"  class="erk">Sign Up </a> </button>



</form>
</div>
 
 
 
 
 
</div>  
</div>
</body>

<?php 
}

mysqli_close($conn);
?>

</html>