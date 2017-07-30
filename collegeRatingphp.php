
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
 
 
 $criteria = array("EducationLevel", "Counseling", "Food", "TeachersLevel", "Clubs", "Library", "Rooms", "Services");
 $ID = $_GET['ID'];
 $Gender = $_GET['Gender'];
 $type =  $_GET['collegeName'];
 
 
 $edlevel = $_POST[$criteria[0]];
 $coun = $_POST[$criteria[1]];
 $food = $_POST[$criteria[2]];
 $teaLevel = $_POST[$criteria[3]];
 $clubs = $_POST[$criteria[4]];
 $lib = $_POST[$criteria[5]];
 $room = $_POST[$criteria[6]];
 $ser = $_POST[$criteria[7]];
 
 
 $result= mysqli_query($con,"SELECT *  FROM collegesrating WHERE CollegeID =".$ID." AND Gender= '".$Gender."'");
 if($result){
	    while($info = mysqli_fetch_array( $result )){ 
		    $RateID      = $info['RatingID'];
		    $NoOfRating  = $info['NoOfRating'] +1;
            $edlevel    += $info[$criteria[0]];
            $coun       += $info[$criteria[1]];
            $food       += $info[$criteria[2]];
            $teaLevel   += $info[$criteria[3]];
            $clubs      += $info[$criteria[4]];
            $lib        += $info[$criteria[5]];
            $room       += $info[$criteria[6]];
            $ser        += $info[$criteria[7]];
		}
	  } 
	
	  
	  $edlevel    = round($edlevel,2);
      $coun       = round($coun,2);
      $food       = round($food,2);
      $teaLevel   = round($teaLevel,2);
      $clubs      = round($clubs,2);
      $lib        = round($lib,2);
      $room       = round($room,2);
      $ser        = round($ser,2);
      
  $qry = "UPDATE collegesrating SET NoOfRating = '".$NoOfRating."', EducationLevel = '".$edlevel."', Counseling= '".$coun."', Food= '".$food."', TeachersLevel = '".$teaLevel."', Clubs = '".$clubs."', 
          Library = '".$lib."', Rooms = '".$room."', Services = '".$ser."' WHERE RatingID =".$RateID;
		  
  $result2 = mysqli_query($con, $qry);
  
  if($result2)
    {
		if($Gender == 'Male')
		{
			$_SESSION['RatingMessage'] = 'نشكر لك تقييمك';
		}
		else if($Gender == 'Female')
		{
			$_SESSION['RatingMessage'] = 'نشكر لكِ تقييمك';
		}
	}
	  
	header("location:collegePage.php?collegeName=".$type); 
?>


