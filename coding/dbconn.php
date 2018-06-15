<?php
// login to MySQL Server from PHP
$con = mysql_connect("localhost","root","");
// If login failed, terminate the page (using functin 'die')
if (!$con) die("Error when connecting to MySQL: ". mysql_error() );



// Login was successful. Then choose a database to work with
$selected = mysql_select_db("virtual",$con);
// If required database cannot be used, terminate the page
if (!$selected) die ("Cannot use database: " . mysql_error() );
?>
