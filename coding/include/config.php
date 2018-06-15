<?php 

$DBServer = 'localhost'; // e.g 'localhost' or '192.168.1.100'
$DBUser   = 'mzbnz23';
$DBPass   = 'a14cs0173';
$DBName   = 'db_mzbnz23';
$conn = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
 echo "MEOW";
// check connection
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
   
  
}
?>