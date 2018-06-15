<HTML>
<HEAD><TITLE>Insert Client</TITLE>

<link rel="stylesheet" type="text/css" href="css/afterregister.css">
</HEAD>
<BODY>
<?php

$test='../include/config.php';
//echo $myurl;
//echo $test;
include($test);

include('../include/function.php');

session_start();

$userType = $_POST["userType"];
$name = $_POST["name"];
$ic = $_POST["ICNumber"];

$agama = $_POST["agama"];
$kaum = $_POST["kaum"];


$street = $_POST["street"];

$state = $_POST["state"];



$mobile = $_POST["mobile"];
$homeNo = $_POST["homep"];

$email = $_POST["email"];




$_SESSION['UserType']=$userType;
$_SESSION['ICNumber']=$ic;
$_SESSION['Name']=$name;


$_SESSION['agama'] = $agama;
$_SESSION['kaum'] = $kaum;

$_SESSION['ge']= $street;

$_SESSION['state']= $state;


$_SESSION['mobile']= $mobile; 
$_SESSION['mail']= $email; 






if($name == "" || $ic == ""){
	
	$to='register_form.php';
	
		gotoInterface($to);
	
}


else{


//$studentMatric = strtoupper($studentMatric); // convert matric to uppercase

if($userType == "A"){
	
$gender = substr($ic,11,1);


$sql1="select Number from generate_id where Generate='".$userType."'";
$result=mysqli_query($conn,$sql1);
$row = mysqli_fetch_row($result);



$number = $row[0] + 1;


$usercombine = "A" . $number;

$sql2 = "UPDATE generate_id SET Number= '".$number."' WHERE Generate= '".$userType."'";
$result2=mysqli_query($conn,$sql2);


if($gender = "1" || $gender = "3" || $gender = "5" || $gender = "7" || $gender = "9"){
$genderName = "Lelaki";
}
else{
	
$genderName = "Perempuan";
}

$sql = "insert into student(matricID, studentName, password,icNumber, agama , kaum , street , state, hpNo ,email,userType) " . // don't forget this dot //   YG ni ambik nama sebijik mcm database
"values('$usercombine','$name','$ic','$ic','$agama','$kaum','$street','$state','$mobile','$email','$userType')" ;           //Yang ni amnik variable belah kiri  yg kat line 7 sampai 11 

}

if($userType == "T"){
	
$sql1="select Number from generate_id where Generate='".$userType."'";

$result=mysqli_query($conn,$sql1);

if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}

$row10 = mysqli_fetch_row($result);


echo $row10[0];
echo"<br>";
$number = $row10[0] + 1;


$usercombine = "T" . $number;

$sql2 = "UPDATE generate_id SET Number= '".$number."' WHERE Generate= '".$userType."'";
$result2=mysqli_query($conn,$sql2);

	
$sql = "insert into teacher(staffNo, staffName, password, icNumber, street , state, hpNo ,email,userType) " . // don't forget this dot //   YG ni ambik nama sebijik mcm database
"values('$usercombine','$name', '$ic','$ic','$street','$state','$mobile','$email','$userType')" ;           //Yang ni amnik variable belah kiri  yg kat line 7 sampai 11 

}


$query = mysqli_query($conn,$sql);

	if (!$query) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}
	
	
}?>
<div id="banner">
    <div id="banner-content">
    UTM Online Library
    </div>
  </div>
<div id ="some">
<div id ="login">
<h1 id ="title"><B> Thank You For Your Registration </B></h1>
<BR><BR>
<p id="info">You now may go back to the homepage if you want to update your profile or start borrow the book </p>
<div id ="position"><a href="../user.php" class ="erk">Click here to back Home</a></div>
</div>
</div>
</BODY>
</HTML>
