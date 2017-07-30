<!DOCTYPE html>
<html>
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
 
 $type = $_GET['collegeName']; 
 $ID;
 $ArabicName;
 $Description;
 $LogoPath;
 
     
	 
 $result= mysqli_query($con,"SELECT *  FROM college WHERE Name = '".$type."'");
     
	 if($result){
	    while($info = mysqli_fetch_array( $result )){ 
		    $ID = $info['ID'];
            $ArabicName = $info['ArabicName'];
			$Description = $info['Description'];
			$LogoPath = $info['Logo'];
		}
	  } 
	  
  if(isset($_SESSION['RatingMessage']))
	 {
		 echo "<script>alert('".$_SESSION['RatingMessage']." ل".$ArabicName."\xF0\x9F\x98\x8A');</script>";
		 $_SESSION['RatingMessage'] = null;
	 }
  if(isset($_SESSION['ContactUsMessage']))
 {
	 echo "<script>alert('".$_SESSION['ContactUsMessage']."');</script>";
	 $_SESSION['ContactUsMessage'] = null;
 }
	
?>
<title><?php echo $ArabicName;?></title>
<meta charset="UTF-8">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" href="fontawesome-stars.css">


<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
#collegeN{text-align: right;}
a:hover#collegeN{ color: green;}
#wrapper {
    width: 1350px;
    height:auto;
	background: blue;
	float: center;
}

#first {
    float:right;
    width: 50%;
    height: 100%;
	padding: 10px;
}

#second {
    float:right;
    width: 50%;
    height: 100%;
	padding: 10px;
}

  /* font-family: 'Amiri', serif; */
  
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0; 
}
/* arabic */
@font-face {
  font-family: 'Amiri';
  font-style: normal;
  font-weight: 400;
  src: local('Amiri'), local('Amiri-Regular'), url(https://fonts.gstatic.com/s/amiri/v7/Pmj8RyKsUWpsaz_klfK4LA.woff2) format('woff2');
  unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+FB50-FDFF, U+FE80-FEFC;
}
#containerDiv{
	width: 800px; 
	margin-right: 50px; 
	min-height:100px;
    overflow:auto;
    height:auto;
	margin-top: 30px;
	padding-bottom: 10px;
}
img {
    max-height: 200px;
    width: auto;
    width: auto\9; /* ie8 */
}

.rating-static {
  width: 130px;
  height: 25px;
  display: block;
  background: url('starratingimg.png') 0 0 no-repeat;
}
.rating-50 { background-position: 0 0; }
.rating-40 { background-position: -26px 0; } 
.rating-30 { background-position: -52px 0; }
.rating-20 { background-position: -80px 0; }
.rating-10 { background-position: -104px 0; }
.rating-00 { background-position: -130px 0; }
 
.rating-05  { background-position: -106px -26px; }
.rating-15 { background-position: -80px -26px; }
.rating-25 { background-position: -54px -26px; }
.rating-35 { background-position: -28px -26px; }
.rating-45 { background-position: 0 -26px; }

</style>

<script>
function ratingFunction(num, string){
var number = num;
var z = number % 1;
z = (Math.round(z * 100)/100).toFixed(1);
if(number> 5)
	number =5;
else if(number<0)
	number = 0;
if(z>=0.1 && z <=0.5)
{
  z = Math.floor(number)+"5";
}
else if(z>0.5 && z<=0.9)
{
  z = Math.round(number)+"0";
}
else
  z = number+"0";
	
 document.getElementById(string).className = "rating-static rating-"+z;
 //document.write("rating-static rating-"+z);
 }
$('img').on("click",function(){
    var win = window.open();
    var url = $(this).attr("src");
    var html = $("body").html("<textarea>" + url +"</textarea>");
    $(win.document.body).html(html);
});

</script>

<body class="w3-light-grey">

<div class="w3-bar w3-teal w3-hide-small" >
 
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
 
   <div class="w3-dropdown-hover">
    <button class="w3-button">الكليات العلمية</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4" >
      <a id = "collegeN" href="collegePage.php?collegeName=sciences" class="w3-bar-item w3-button" >العلوم</a>
      <a id = "collegeN" href="collegePage.php?collegeName=ccis" class="w3-bar-item w3-button">علوم الحاسب والمعلومات</a>
      <a id = "collegeN" href="collegePage.php?collegeName=engineering" class="w3-bar-item w3-button">الهندسة</a>
	  <a id = "collegeN" href="collegePage.php?collegeName=cba" class="w3-bar-item w3-button">إدارة الأعمال</a>
	  <a id = "collegeN" href="collegePage.php?collegeName=cfas" class="w3-bar-item w3-button"> علوم الأغذية والزراعة</a>
	  <a id = "collegeN" href="collegePage.php?collegeName=cap" class="w3-bar-item w3-button">العمارة والتخطيط</a>
    </div>
  </div>
  
   <div class="w3-dropdown-hover">
    <button class="w3-button">الكليات الإنسانية</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4" >
      <a id = "collegeN" href="collegePage.php?collegeName=arts" class="w3-bar-item w3-button">الآداب</a>
      <a id = "collegeN" href="collegePage.php?collegeName=csspa" class="w3-bar-item w3-button">علوم الرياضة والنشاط البدني</a>
      <a id = "collegeN" href="collegePage.php?collegeName=cta" class="w3-bar-item w3-button">السياحة والآثار</a>
	  <a id = "collegeN" href="collegePage.php?collegeName=clps" class="w3-bar-item w3-button">الحقوق والعلوم السياسية</a>
	  <a id = "collegeN" href="collegePage.php?collegeName=education" class="w3-bar-item w3-button"> التربية</a>
	  <a id = "collegeN" href="collegePage.php?collegeName=ali" class="w3-bar-item w3-button">معهد اللغويات العربية</a>
	  <a id = "collegeN" href="collegePage.php?collegeName=colt" class="w3-bar-item w3-button"> اللغات والترجمة</a>
    </div>
  </div>
  
   <div class="w3-dropdown-hover">
    <button class="w3-button">الكليات الصحية</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a id = "collegeN" href="collegePage.php?collegeName=nursing" class="w3-bar-item w3-button">التمريض</a>
      <a id = "collegeN" href="collegePage.php?collegeName=pharmacy" class="w3-bar-item w3-button">الصيدلة</a>
      <a id = "collegeN" href="collegePage.php?collegeName=cams" class="w3-bar-item w3-button">العلوم الطبية والتطبيقية</a>
	  <a id = "collegeN" href="collegePage.php?collegeName=medicine" class="w3-bar-item w3-button">الطب</a>
	  <a id = "collegeN" href="collegePage.php?collegeName=dent" class="w3-bar-item w3-button">طب الأسنان</a>
      <a id = "collegeN" href="collegePage.php?collegeName=pscems" class="w3-bar-item w3-button">الأمير سلطان للخدمات الطبية الطارئة</a>
    </div>
  </div>
  

 <a href="#" class="w3-bar-item w3-button w3-white" >إبحث</a>
  <input type="text" class="w3-bar-item w3-input" placeholder = "...اسم الدكتور" style ="text-align:right;">

</div>
  <?php
	//$result= mysqli_query($con,"SELECT *  FROM college");
	 
    // if($result){
	  //  while($info = mysqli_fetch_array( $result )){ 
        //    echo $info['Description'];
		//}
	  //}
	
	?> 
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
   <div class="w3-container w3-center w3-padding-48 w3-white">
   <!-- <h1 class="w3-xxxlarge"><b>موقع تجريبي <br>
	<br>
	</b></h1> 
    <h6>  <span class="w3-tag"> مرحبا بكم في موقع تقييم اعضاء هيئة التدريس في جامعة الملك سعود </span></h6>-->
	 <!-- <hr class="w3-black"> -->
	 <!--
	  <a href="https://<//?//php //echo $type;?>.ksu.edu.sa/ar"><//?//php echo $type;?>.ksu.edu.sa</a>-->
	  
	  
	<!--نبذة عن الكلية-->
   <div class="w3-container w3-light-grey w3-right" id="containerDiv">
      <h3 class ="w3-center">نبذة عن الكلية</h3>
	  <hr>
	  <!---College Logo-->
	  <img src= "<?php echo $LogoPath;?>" alt="logo" class="w3-center"/>
	  <br><br>
	  <!---Brief Description about the College-->
	  <p style ="font-family:'Amiri', serif;"><?php echo $Description;?></p>
   </div>
  
 
  
  <!--صور الكلية-->
   <div class="w3-container w3-light-grey w3-right" id="containerDiv">
      <h3 class ="w3-center">صور من الكلية</h3>
	  <hr>
	  <?php
	   
	    $result= mysqli_query($con,"SELECT *  FROM collegesphotos WHERE college_id =".$ID);
	    $count = 0;
        if($result){
	     while($info = mysqli_fetch_array( $result )){ 
		     ?>
             <img src= "<?php echo $info['PhotoPath'];?>" alt="logo" alt ="<?php echo $info['PhotoAlt'];?>" />
			 
			 <?php
			 $count = $count+1;
		 }
		 
	    }
		if($count == 0)
		{
			?>
			<p style ="font-family:'Amiri', serif;">لا يوجد صور</p>
			<?php
		}			
	  ?> 
	  
	  
   </div>
  <?php
    $criteria = array("مستوى التعليم", "الإرشاد الأكاديمي", "مستوى الطعام", "مستوى أعضاء التدريس", "الأندية الطلابية", "مكتبة الكلية", "تجهيزات القاعات", "الخدمات العامة");
	$values;
   ?>
		
    
   <!-- تقييم الكلية طلاب-->
   <div class="w3-container w3-light-grey w3-right" id="containerDiv">
      <h3 class ="w3-center">التقييم - طلاب</h3>
	  
	  <?php
	    $NoOfRating;
	  
		
	    $result= mysqli_query($con,"SELECT *  FROM collegesrating WHERE CollegeID =".$ID." AND Gender= 'Male'");
        if($result){ 
	     while($info = mysqli_fetch_array( $result )){ 
			 $NoOfRating = $info['NoOfRating'];
			 if($NoOfRating == 0)
			 {
			 $values[0] = $info['EducationLevel'];
		     $values[1] = $info['Counseling'];
		     $values[2] = $info['Food'];
		     $values[3] = $info['TeachersLevel'];
		     $values[4] = $info['Clubs'];
		     $values[5] = $info['Library'];
		     $values[6] = $info['Rooms'];
			 $values[7] = $info['Services'];
			 }
			 else
			 {
				 $values[0] = $info['EducationLevel']/$NoOfRating;
		         $values[1] = $info['Counseling']/$NoOfRating;
		         $values[2] = $info['Food']/$NoOfRating;
		         $values[3] = $info['TeachersLevel']/$NoOfRating;
		         $values[4] = $info['Clubs']/$NoOfRating;
		         $values[5] = $info['Library']/$NoOfRating;
		         $values[6] = $info['Rooms']/$NoOfRating;
			     $values[7] = $info['Services']/$NoOfRating;
			 }
		 }
	    }
	  ?>
	  <hr>
	    
	    <table style="margin-left: 70px;">
	      <?php
		  $CCount = 0;
          while($CCount != 8)
          {	
			
	        if($CCount == 0 || $CCount == 4)
				echo "<tr>";
             ?>
			 <td style ="padding: 15px;">
			 <p id = "<?php echo $CCount;?>"></p>
			 <script>ratingFunction(<?php echo $values[$CCount];?>,<?php echo $CCount;?>);</script>
			 <?php
			 echo "<strong>".$criteria[$CCount]."</strong><br>";?>
			  </td>
			 <?php
			 $CCount = $CCount +1;
			 if($CCount == 4 || $CCount == 8)
				echo "</tr>"; 
		  }
		     
		 ?>
		 </table>
		 <hr>
		 <table style="margin-left: 30px;">
		    <tr>
			
			  <td>
			    <a href = "collegeRating.php?Gender=Male&&college=<?php echo $type;?>" class = "w3-center" style="color: blue;"> قيم الكلية </a>
			  </td>
			   
			  <td>،
			    عدد التقييمات: 
				<?php echo $NoOfRating;?>
			  </td>
			  
			</tr>
		 </table>
   </div>
  
  <?php
  //Check whether it is not a female college.
  if($ID != 6 && $ID != 8 && $ID != 16 && $ID != 18 && $ID != 19)
  { ?>
  <!-- تقييم الكلية طالبات-->
   <div class="w3-container w3-light-grey w3-right" id="containerDiv">
      <h3 class ="w3-center">التقييم - طالبات</h3>
	 
	  <?php
	    $FNoOfRating;
	    
	    $result= mysqli_query($con,"SELECT *  FROM collegesrating WHERE CollegeID =".$ID." AND Gender= 'Female'");
        if($result){ 
	     while($info = mysqli_fetch_array( $result )){ 
			 $FNoOfRating = $info['NoOfRating'];
			 if($FNoOfRating == 0)
			 {
				 $values[10] = $info['EducationLevel'];
		         $values[11] = $info['Counseling'];
		         $values[12] = $info['Food'];
		         $values[13] = $info['TeachersLevel'];
		         $values[14] = $info['Clubs'];
		         $values[15] = $info['Library'];
		         $values[16] = $info['Rooms'];
			     $values[17] = $info['Services'];
			 }
			 else {
			 $values[10] = $info['EducationLevel']/$FNoOfRating;
		     $values[11] = $info['Counseling']/$FNoOfRating;
		     $values[12] = $info['Food']/$FNoOfRating;
		     $values[13] = $info['TeachersLevel']/$FNoOfRating;
		     $values[14] = $info['Clubs']/$FNoOfRating;
		     $values[15] = $info['Library']/$FNoOfRating;
		     $values[16] = $info['Rooms']/$FNoOfRating;
			 $values[17] = $info['Services']/$FNoOfRating;}
		 }
	    }
	  ?>
	  <hr>
	    
	    <table style="margin-left: 70px;">
	      <?php
		  $FCCount = 10;
          while($FCCount!= 18)
          {	
			
	        if($FCCount == 10 || $FCCount == 14)
				echo "<tr>";
             ?>
			 <td style ="padding: 15px;">
			 <p id = "<?php echo $FCCount;?>"></p>
			 <script>ratingFunction(<?php echo $values[$FCCount];?>,<?php echo $FCCount;?>);</script>
			 <?php
			 echo "<strong>".$criteria[$FCCount-10]."</strong><br>";?>
			  </td>
			 <?php
			 $FCCount = $FCCount +1;
			 if($FCCount == 14 || $FCCount == 18)
				echo "</tr>"; 
		  }
		     
		 ?>
		 </table>
		 <hr>
		 <table style="margin-left: 30px;">
		    <tr>
			
			  <td>
			    <a href = "collegeRating.php?Gender=Female&&college=<?php echo $type;?>" class = "w3-center" style="color: blue;"> قيمي الكلية </a>
			  </td>
			   
			  <td>،
			    عدد التقييمات: 
				<?php echo $FNoOfRating;?>
			  </td>
			  
			</tr>
		 </table>
   </div>
  <?php }
  ?>
   
  <!--طاقم التدريس-->
   <div class="w3-container w3-light-grey w3-right" id="containerDiv">
      <h3 class ="w3-center">طاقم التدريس</h3>
	  <hr>
   </div>
   
   
  <!--تواصل مع الكلية-->
   <div class="w3-container w3-light-grey w3-right" id="containerDiv">
      <h3 class ="w3-center">مواقع التواصل</h3>
	  <hr>
	  <p style="text-align: right;"> 
	  <a href="https://<?php echo $type;?>.ksu.edu.sa/ar" style = "color: blue;"><?php echo $type;?>.ksu.edu.sa</a>
	   :
	  <strong>موقع الكلية</strong>
	  
	  </p>
   </div>
   
  </div>
  
  </div>
  
  </body>
 <footer class="w3-container w3-teal" style="padding:10px">

	    
   
	<div id="wrapper">
    <div id="first" style="font-family:'Amiri', serif;">
	   <span class="w3-right w3-large" ></i> تواصل معنا     &nbsp;</span>
	   <br>
	   <hr style ="width: 400px; float: right;" dir ="right">
	   <form action = "contactUsPHP.php" method = "POST" style = "float: right; height: auto; width: 100%; margin-right: 30px;" dir="rtl" >
	   <select Style="height: 30px; width: 150px;" name = "type">
        <option value="اقتراح" >اقتراح</option>
        <option value="شكوى" >شكوى</option>
        <option value="تكرار في البيانات" >تكرار في البيانات</option>
        <option value="خطأ في البيانات" >خطأ في البيانات</option>
        <option value="اخرى" >اخرى</option>
       </select>
	   <br>
	   <br>
	   <textarea  name = "messageBody" placeholder="محتوى الرسالة" Style="height: 100px; width: 60%;" ></textarea>
	   <br>
	   <br>
	   <input type ="submit" value ="إرسال" style="width: 70px;"/>
	   </form>
	</div>
    <div id="second"></div>
    </div>
	
</footer>

</html>
