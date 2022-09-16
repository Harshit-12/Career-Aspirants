<!DOCTYPE html>
<html>
<head>
<title>IT Blogs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="topnav" id="myTopnav">
<img class="logo" src="cal.png">

  <a href="index.php">Home</a>
  <a href="All Blogs.php">Blogs</a>
   <a href="About Us.php">About Us</a>
  <a href="Contact Us.php">Contact Us </a>
  <a href="Admin login Page.php">Admin</a>
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
<div class="heading">
  <h1><center>IT Blogs</center></h1>
</div>
<br><br>
<div class="txt">
<strong>
Here is the Best Collection of Blogs that provides the Complete Roadmap to become Software Engineer , these blogs also help to explore the career opportunities in Data Science ,how to become a successful Web Developer. Jobs related to coding.
</strong>
</div>  
<br><br>
<?php 
$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");

$result = mysqli_query($db, "SELECT * FROM blogs where category='it'");
while($data = mysqli_fetch_array($result))
{

    ?>


<div class="responsive">
  <div class="gallery">
    
      <img src="<?php echo $data['image']; ?>" width="600" height="400">
    
    <?php $id=$data['id']; ?>

    <div class="desc">
      <h3><?php echo $data['Title']."<br>"; ?></h3>

      <br>
      
  <a href=View_Blogs.php?id=<?php echo $id;?> class="button">View</a>
      <br>
    </div>
  </div>
  <br>
</div>


<?php
}
?>
<br><br><br><br>
<center>
<a href="All Blogs.php" class="button">Back to All Blogs</a>
<br><br>
</center>
</body>
</html>
