
<?php
session_start();
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $DB_DATABASE = 'ratingdb'; //DB Name here
   //Connect to mysql server
   $con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
  if(!$con) {
   die('Failed to connect to server: ' . mysql_error());
  }
  //Select database
  $db = mysqli_select_db($con,$DB_DATABASE);
  if(!$db) {
   die("Unable to select database");
  } 
 
 mysqli_set_charset($con, 'utf8');
 
 

 
 
 $messageType = $_POST['type'];
 $messageBody = $_POST['messageBody'];


 
      
  $qry="INSERT INTO contactusmessages VALUES('' , '".$messageType."', '".$_SERVER['HTTP_REFERER']."<br>".$messageBody."')";

		  
  $result = mysqli_query($con, $qry);
  
  if($result)
    {
	  $_SESSION['ContactUsMessage'] = 'تم الإرسال .. شكرًا';
	}
	  
	header('Location: ' . $_SERVER['HTTP_REFERER']); 
?>


