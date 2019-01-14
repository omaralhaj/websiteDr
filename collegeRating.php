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
 
 $type = $_GET['college']; 
 $ID;
 $Gender = $_GET['Gender']; 
 $ArabicName;
 
 $result= mysqli_query($con,"SELECT *  FROM college WHERE Name = '".$type."'");
     
	 if($result){
	    while($info = mysqli_fetch_array( $result )){ 
		    $ID = $info['ID'];
            $ArabicName = $info['ArabicName'];
		}
	  } 
  $criteria = array("EducationLevel", "Counseling", "Food", "TeachersLevel", "Clubs", "Library", "Rooms", "Services");
  $criteriaAr = array(
  "مستوى التعليم المقدم", 
  "مستوى الإرشاد الأكاديمي", 
  "مستوى الطعام(نظافته، سعره، مذاقه...إلخ)", 
  "مستوى أعضاء هيئة التدريس (الشرح المقدم، الأختبارات، الأسلوب ...إلخ)", 
  "مستوى النوادي الطلابية ومدى تفاعلها:", 
  "مستوى مكتبة الكلية", 
  "مستوى القاعات (هل القاعات مهيئة للتعليم؟)", 
  "مستوى الخدمات العامة (النظافة، الشبكة ...إلخ)");
  
  if(isset($_SESSION['ContactUsMessage']))
 {
	 echo "<script>alert('".$_SESSION['ContactUsMessage']."');</script>";
	 $_SESSION['ContactUsMessage'] = null;
 }
	
?>
<title><?php echo "تقييم"." ".$ArabicName;?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="CSSFile.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0; 
}
</style>
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
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">
   
   <div class="w3-container w3-center w3-padding-48 w3-white">
  <!-- Header -->
  <!--<header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>موقع تجريبي</b></h1>
    <h6>  <span class="w3-tag"> <?php// echo $Gender."----".$type;?></span></h6>
	
  </header>-->
  <div class="w3-container w3-light-grey w3-right" id="containerDiv" >
      <h3 class ="w3-center"><?php echo "تقييم"." ".$ArabicName;?></h3>
	  <hr>
	  <form action="collegeRatingphp.php?ID=<?php echo $ID;?>&&Gender=<?php echo $Gender;?>&&collegeName=<?php echo $type;?>" method = "POST">
	  <div align = "right" style="margin-right:  10px;">
	     <?php 
		  $count = 0;
		  while($count != 8)
		  { ?>
	     <strong style ="margin-top: 100px;">:<?php echo $criteriaAr[$count];?>*</strong>
	     <table>
			 <!-- Rating riteria-->
			    
			  <!--  <tr style="width: 600px;">
				<th align = "right">:مستوى التعليم المقدم*</th>
				</tr>-->
				<tr>
				<td align = "right">.ممتاز&nbsp;&nbsp;</td>
				<td><input type="Radio" style="margin-right: 10px;" name = "<?php echo $criteria[$count];?>" value = "5" /></td>
				</tr>
				<tr>
				<td align = "right">.جيد&nbsp;&nbsp;</td>
				<td><input type="Radio" style="margin-right: 0px;" name = "<?php echo $criteria[$count];?>" value = "4"/></td>
				</tr>
				<tr>
				<td align = "right">.مقبول&nbsp;&nbsp;
				</td>
				<td><input type="Radio" style="margin-right: 0px;" name = "<?php echo $criteria[$count];?>" value = "3" checked /></td>
				</tr>
				<tr>
				<td align = "right">.متدني&nbsp;&nbsp;</td>
				<td><input type="Radio" style="margin-right: 0px;" name = "<?php echo $criteria[$count];?>" value = "2"/></td>
				</tr>
				<tr>
				<td align = "right">.سيء&nbsp;&nbsp;</td>
				<td><input type="Radio" style="margin-right: 0px;" name = "<?php echo $criteria[$count];?>" value = "1"/></td>
				</tr>
			    <br>
		 </table>
		  <?php $count = $count + 1;
		  } 
		  ?>
	  </div>
	   <input type="submit" value="Submit">
	 </form>
   </div>
  
  </div>
  </div>
 </body>
<footer class="w3-container w3-teal" style="padding:10px">

	    
   
	<div id="wrapper">
    <div id="first" style="font-family:'Amiri', serif; margin-right: 70px; font-size: 15px;">
	   <span class="w3-right" style="font-size: 25px;"> تواصل معنا     &nbsp;</span>
	   <br><br>
	   <hr style ="width: 480px; float: right;" dir ="right">
	   <form action = "contactUsPHP.php" method = "POST" style = "float: right; height: auto; width: 100%; margin-right: 50px;" dir="rtl" >
	   <select Style="height: 30px; width: 150px;" name = "type">
        <option value="اقتراح" >اقتراح</option>
        <option value="شكوى" >شكوى</option>
        <option value="تكرار في البيانات" >تكرار في البيانات</option>
        <option value="خطأ في البيانات" >خطأ في البيانات</option>
        <option value="اخرى" >اخرى</option>
       </select>
	   <br>
	   <br>
	   <textarea  name = "messageBody" placeholder="محتوى الرسالة" Style="height: 100px; width: 80%;" ></textarea>
	   <br>
	   <br>
	   <input type ="submit" value ="إرسال" style="width: 70px;"/>
	   </form>
	</div>
 <div id="second" class="w3-center" style=" margin-right: 300px; margin-top: 50px; font-size: 20px; font-family:'Amiri', serif;">
	<br>
    <a  style="text-decoration : none" href="Rules.php"> القوانين </a>   
	<br>
	<a  style="text-decoration : none" href="AboutUs.php">معلومات عنا </a>
	<br>
	<br>
	 <span style = "font-size: 15px;">
    	. 
	 جميع الحقوق محفوظة 2017	&copy;
	 </span>
	</div>
    </div>
	
</footer>



</html>
