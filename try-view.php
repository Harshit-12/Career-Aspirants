<?php

	
	$id=$_GET['id'];
	
	
$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");

$result = mysqli_query($db, "SELECT * FROM blogs where id='$id'");

$data = mysqli_fetch_row($result);

    ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">


	<title>
    <?php
	 echo $data[0];
     
	 ?>
    </title>
	<style type="text/css">
.blogs
{
	border-radius: 5px;
  width: 95%;
  background-color: #f2f2f2;
  padding: 20px;
  border-color: solid black;
  box-shadow: 7px 10px 15px #888888;
}
.button {
  background-color: #99cc00; /* Green */
  border: none;
  color: white;

  padding: 15px 32px;
  padding-bottom: 20px;
  text-align: center;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button:hover {
  background-color: #4CAF50;
}

.head{
background-color: black;
width:95%;
padding:15px;
height:auto;
}

.txt
{
    text-align:left;
    
}
.hd{
  background-image: url('cool-bg.png');
  padding: 15px;
  border-radius: 5px;
  text-align: center;
}
	
 body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: red;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.header {
  padding: 10px;
  text-align: center;
  
  color: white;
}
.uphead {
  
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  border-radius: 10px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.heading{
  text-align: center;
}


.footer{
  padding: 5px;
  text-align: center;
  color: white;
  background-color: #333;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
  border-radius: 30px;
  padding: 10px;
}
.fa-linkedin {
  background: #007bb5;
  border-radius: 30px;
  padding: 10px;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  border-radius: 30px;
  padding: 10px;
  color: white;
}
.Admin{
  float: right;
}
.txt{
  width: 80%;
  color: solid black;
  text-align: left;
}
.button {
  background-color: #99cc00; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button:hover {
  background-color: #4CAF50;
}
.logo{
    float: left;
    position: relative;
    height: 40px;
    width: 200px;
    padding-left: 5px;
    padding-right: 5px;
    margin: 5px 5px 5px 5px;
}
.flogo{
    float: center;
    position: relative;
    height: 50px;
    width: 200px;
    margin: 5px 5px 5px 5px;
}

div.gallery {
  border: 1px solid #ccc;
  margin-top: 20px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  transition: transform .4s;
  
}


div.gallery img {
  width: 100%;
  height: 40%;
}

div.desc {
  padding: 10px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 10px;
  float: left;
  width: 33.33%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}


.card{    
    text-align: center;
    margin: 7%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card.card-body{
    text-align: left;
}
</style>
</head>
<body>
	

    <div class="topnav" id="myTopnav">
    <img class="logo" src="cal.png">

  <a href="index.php" >Home</a>
  <a href="All Blogs.php">Blogs</a>
  <a href="About Us.php">About Us </a>
  <a href="Contact Us.php">Contact Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<div class="uphead">
<div class="header">
 
</div>
</div>

<br><br>
	<center>
		<div class="blogs">
    <div class="hd">
    <?php
	 echo "<h1>". $data[0]."</h1>";
     
	 ?>
     </div>
     <br><br><br> 
	 <img src="<?php echo $data[1]; ?>" width=100% height=auto>
	 <?php 
	 echo "<br><br><br><br>";
     ?>
     <div class="txt">
	 <?php
     echo $data[2]; 
     ?>
     </div>
     <?php
	 echo "<br>";

  ?>
</div>
<br><br>

<h1> Related Blogs</h1>

   <div class="row">
<?php
	
$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");
$result = mysqli_query($db,"SELECT * FROM blogs where category='$tag' and id!='$tid'");                   
while($dat = mysqli_fetch_array($result))
{
    
    ?>


      <div class="cl col-lg-4 col-md-6">
    <div class="card">
        
          <img src="<?php echo $data['image']; ?>">
        
          <?php $id=$data['id']; ?>
        <div class="card-body">
                <div class="b">
                 <h3><?php echo $data['Title']; ?></h3>
                </div>
                 <a href=View_Blogs.php?id=<?php echo $id;?> class="button">View</a>
       
        </div>
      </div>
      </div>
    

<?php
}
?>
</div>

<br><br>

</center>
<br><br>

   <div class="row">
<?php 
$tag=$data[4];
$tid=$data[3];
$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");
$result2 = mysqli_query($db, "SELECT * FROM blogs");
$result = mysqli_query($db,"SELECT * FROM blogs where category='$tag' and id!='$tid'");  
while($data = mysqli_fetch_array($result))
{

    ?>
 
      <div class="cl col-lg-4 col-md-6">
    <div class="card">
        
          <img src="<?php echo $data['image']; ?>">
        
          <?php $id=$data['id']; ?>
        <div class="card-body">
                <div class="b">
                 <h3><?php echo $data['Title']; ?></h3>
                </div>
                 <a href=View_Blogs.php?id=<?php echo $id;?> class="button" >View</a>
       
        </div>
      </div>
      </div>
    
<?php
}
?>
</div>
<center>
<a href="All Blogs.php" class="button">Back to All Blogs</a>
</center>
<br><br>

<div class="footer">
  <br>
  <a  class="footer" href="index.php">Home</a>
  <a class="footer" href="All Blogs.php">Blogs</a>
  <a class="footer" href="About Us.php">About US</a>
  <a class="footer" href="Contact Us.php">Contact Us</a>
<br>
<br>

  <a class="footer" href="MBA.php">MBA</a>
  <a class="footer" href="Interview.php">Interview</a>
  <a class="footer" href="IT.php">IT</a>
  <a class="footer" href="Career.php">Career</a>
  <a class="footer" href="Soft-Skills.php">Soft Skills</a>
<br><br>

<a href="https://www.facebook.com/profile.php?id=100040987392349" class="fa fa-facebook"></a>
<a href="https://www.linkedin.com/in/harshit-srivastava-1409241a4/" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/channel/UCFXGRB8uaZP40j1r-grDtUg" class="fa fa-youtube"></a>
<br>
<br>
  <img class="flogo" src="cal.png">

  </body>
</html>
