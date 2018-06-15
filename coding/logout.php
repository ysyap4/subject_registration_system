<?php 
include('setting.php');
$test=$myurl.'/include/config.php';
//echo $myurl;
//echo $test;
include($test);

session_start();
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

include('include/function.php');

	gotoInterface('Login.php');
    

?>

<body>
</body>
</html>