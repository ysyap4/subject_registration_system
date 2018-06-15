<?php 
include('/setting.php');
$test='/include/config.php';
//echo $myurl;
//echo $test;
include($test);

include('/include/function.php');

session_start();

$userid = $_SESSION['userId'];

echo $userid;


?>
<html>

<head>
<title>Teacher Page</title>
 <link rel="stylesheet" type="text/css" href = "css/teacher.css">
</head>

<body>

<div id="cover">

<div id ="login">
<a href="secretary/secretaryupdate.php" >SECRETARY PROFILE UPDATE</a>
<br>
<br>
<br>
<a href="secretary/student_list_class.php" >UPDATE STUDENT ClASS</a>
</div>
<a href="secretary/list_class_teacher.php" >UPDATE TEACHER HOME ClASS</a>
<br>
<a href="logout.php" >Logout</a>
</div>


</div>


</body>