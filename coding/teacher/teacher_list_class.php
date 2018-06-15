<?php 
include('../setting.php');
$test='../include/config.php';
include($test);
include('../include/function.php');
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
<title>Teacher List Class</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="../css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrap">
<div class="wrapper">
<div class="logo">
	<a href="../teacher.php"><h1>Master(Teacher)</h1></a>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		  	<li class="active"><a href="../teacher.php"><span>Home</span></a></li>
			<li><a href="../teacher/teacherupdate.php"><span>Profile</span></a></li>
			<li class="last"><a href="../contact.php"><span>Contact</span></a></li>
			<li class="has-sub"><a href="../logout.php"><span>Logout</span></a></li>
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
	<div class="main1">
			<div class="grid_1_of_2 images_1_of_2">
				<h2 class="style">About Erudite</h2>
				
   	<form action="teacher_list_class.php" method="post">
<table class="table table-striped" >
  <tr class="success">
    <td width="106">Search</td>
<TD><select name ="subject">
<option selected value="TR111">Bahasa Melayu
<option value="TR112">Bahasa Inggeris
<option value="TR121">Pendidikan Islam
<option value="TR122">Pendidikan Moral
<option value="TR132">Matematik
<option value="TR133">Sejarah
<option value="PR311">Prinsip Perakaunan
<option value="PR312">Ekonomi Asas
<option value="PR313">Perdagangan
<option value="PR314">Keusahawanan
<option value="SP211">Fizik
<option value="SP212">Kimia
<option value="SP213">Biologi
<option value="SP214">Matematik Tambahan
<option value="ST411">Kesasteraan Melayu
<option value="ST412">Literature in English
<option value="ST413">Sains Tambahan
<option value="ST414">Geografi

</select>
 <input name="search" 
      type="submit" value="search" />
</TD>
 



 </tr>
  
</table>

<p>&nbsp;</p>
</form>


<br><br>
	
<?php 
  
  
  if (isset($_POST['subject'])){
$subject=$_POST['subject'];
  	
	$sql="SELECT class_sub_teacher.classSubTCode, class_sub_teacher.className, class_sub_teacher.subjectCode, subject.subjectName, class_sub_teacher.staffNo FROM class_sub_teacher INNER JOIN subject ON class_sub_teacher.subjectCode=subject.subjectCode WHERE class_sub_teacher.subjectCode='".$subject."' ORDER BY class_sub_teacher.classSubTCode";

	//SQL STATEMENT END
	

	$x = 1;
	
	
	
	$result=mysqli_query($conn,$sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysqli_error($conn);
    	exit;
	}?>
    
<table class="table table-striped">
  <tr class ="success">
   <td>No</td>
    <th>ClassSubCode</th>
	<th>Class Name</th>
    <th>Subject Code</th>
    <th>Subject Name</th>
	<th>Teacher Code</th
  </tr>
   <?php while($row = mysqli_fetch_row($result))  { ?>
  <tr>
   
    <td><?php   echo $x; ?></td>
    <td><?php   echo $row[0]; ?></td>
	<td><?php   echo $row[1]; ?></td>
    <td><?php   echo $row[2]; ?></td>
	<td><?php echo $row[3]; ?></td>
	<td><?php echo $row[4]; ?></td>
     
   
    
  </tr>
  <?php
   
    $x = $x + 1;}
   } ?>
</table>
<br><br><br>

<form action="save_teacher_subject.php" method="post">
<p>Please write streamcode, subject code and your Staff ID to choose which class you want teach</p>
<table class="table">
<tbody>
<br>
<tr class="success">
<td>Class Sub Code</td>
<td>Subject Code</td>
<td>Staff ID</td>
</tr>

<tr>
<td><input type="text" name="streamc" id="streamc" /></td></td>
<td><input type="text" name="subjectcode" id="subjectcode" /></td></td>
<td><input type="text" name="staff" id="staff" /></td></td>
<td><input type="submit" name="Save" id="Save" value="Save" /></td>
</tr>

</tbody>
</table>
</form>

			</div>
			<div class="grid_1_of_2 images_1_of_2 img_style">
				<img src="../images/teacher2.jpg" alt="">
			</div>
			<div class="clear"></div>
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
		<a href="../teacher.php"><h2>Master</h2></a>
		<div class="copy">
			<p class="w3-link">© All Rights Reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
</body>
</html>