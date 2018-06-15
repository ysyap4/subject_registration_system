<?php 
include('../setting.php');
$test='../include/config.php';


include($test);
include('../include/function.php');
session_start();

$streamc=$_POST['streamc'];
$subjectcode=$_POST['subjectcode'];
$staff=$_POST['staff'];



//$userid=$_GET['txtuserid'];
//$userid=$_GET['txtuserid'];

$sql = "UPDATE class_sub_teacher SET staffNo = '".$staff."' where classSubTCode = '".$streamc."'";



	
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	
$sql2 = "select className from class_sub_teacher where classSubTCode='".$streamc."'";
	
	
$result2=mysqli_query($conn,$sql2);
	if (!$result2) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	$row = mysqli_fetch_row($result2);
	$class = $row[0];
	
	
	
$sql1 = "UPDATE teacher SET classSubTCode = '".$streamc."', subjectCode = '".$subjectcode."' , className = '".$class."' where staffNo = '".$staff."'";
	
$result1=mysqli_query($conn,$sql1);
	if (!$result1) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
		$to='../teacher/teacher_list_class.php';
	   gotoInterface($to);
?>