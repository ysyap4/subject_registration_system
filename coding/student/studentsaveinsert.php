<?php 
include('../setting.php');
$test='../include/config.php';


include($test);
include('../include/function.php');
session_start();

$userid = $_SESSION['userId'];

echo $userid;

$password=$_POST['txtpassword'];
$Name=$_POST['txtName'];
$IC=$_POST['ICNumber'];




$street=$_POST['street'];
$state=$_POST['state'];

$mobile=$_POST['mobile'];
$email=$_POST['email'];


//$userid=$_GET['txtuserid'];
//$userid=$_GET['txtuserid'];

$sql = "UPDATE student SET password = '".$password."', studentName = '".$Name."', icNumber = '".$IC."', street = '".$street."', state= '".$state."', hpNo= '".$mobile."' , email= '".$email."' WHERE matricID= '".$userid."'";

	
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysql_error();
    	exit;
	}
		$to='../student.php';
	
		gotoInterface($to);
?>