<?php 
include('../setting.php');
$test='../include/config.php';


include($test);
include('../include/function.php');
session_start();

$class=$_POST['class'];

echo $class;

$matric = $_SESSION['userId'];

//$userid=$_GET['txtuserid'];
//$userid=$_GET['txtuserid'];


$sql="SELECT streamName FROM class where className='".$class."'";



$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
		}
$row = mysqli_fetch_row($result);

$stream = $row[0];

$sql1 = "UPDATE student SET className = '".$class."',streamName = '".$stream."' where matricID = '".$matric."'";
	
$result1=mysqli_query($conn,$sql1);
	if (!$result1) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	
		$to='../student.php';
	   gotoInterface($to);
	
?>