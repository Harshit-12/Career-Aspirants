<!DOCTYPE html>
<html>
<head>
  
<title>All Blogs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/all-blogs-style.css">

</head>
<body>

<div class="topnav" id="myTopnav">
<img class="logo" src="cal.png">

  <a href="index.php">Home</a>
  <a href="All Blogs.php">Blogs</a>
   <a href="About Us.php">About Us</a>
  <a href="Contact Us.php">Contact Us </a>
  
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
<div class="heading">
<div class="b2">
  <h1><center>All Blogs</center></h1>
</div>
</div>
<br><br>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="MBA.php">MBA</a>
  <a href="Interview.php">Interview</a>
  <a href="IT.php">IT</a>
  <a href="Career.php">Career</a>
  <a href="Soft-Skills.php">Soft Skills</a>
  <a href="Exams.php">Exams</a>
</div>


<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Blog Categories</button>  
  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


<br><br>
    <div class="row">
<?php 
$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");

$result = mysqli_query($db, "SELECT * FROM blogs");
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


<div class="footer">
  <br>
  <a  class="footer" href="index.php">  Home </a>
  <a class="footer" href="All Blogs.php">  Blogs </a>
  <a class="footer" href="About Us.php">  About US </a>
  <a class="footer" href="Contact Us.php">  Contact Us  </a>
<br><br>
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
