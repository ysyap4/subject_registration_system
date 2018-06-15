<?php 
include('../setting.php');
$test='../include/config.php';


include($test);
include('../include/function.php');
session_start();


$class=$_POST['class'];
$staff=$_POST['staff'];



//$userid=$_GET['txtuserid'];
//$userid=$_GET['txtuserid'];

$sql = "UPDATE class SET staffNoT = '".$staff."' where className = '".$class."'";



	
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}

	
$sql1 = "UPDATE teacher SET className = '".$class."' where staffNo = '".$staff."'";
	
$result1=mysqli_query($conn,$sql1);
	if (!$result1) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
		$to='../secretary/list_class_teacher.php';
	   gotoInterface($to);
?>