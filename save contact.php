<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css">
<script type="text/javascript">
  function Blog_Page()
  {
    location.replace("All Blogs.php")
  }

</script>

</head>
<body>

<div class="topnav" id="myTopnav">
    <img class="logo" src="cal.png">

  <a href="index.php" >Home</a>
  <a href=" All Blogs.php">Blogs</a>
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



<div class="head">
<center>
<img src="cal.png" width="50%" height="auto";>
</center>
</div>
<center>

<br>
<div class="imgcontainer" >
  <img src="massage_sent.png" width="40%" height="auto">

</div>
  <br>

<?php  
if (isset($_POST['submit'])) {

$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");

  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Phone=$_POST['Phone'];
  $Massage=$_POST['Massage'];
  
  $date=date("Y-m-d");
    // Get all the submitted data from the form
    $sql = "INSERT INTO Contact (Name,email,phone,massage,Cdate) VALUES ('$Name','$Email','$Phone','$Massage','$date')";

    // Execute query
    mysqli_query($db, $sql);

    ?>
    <div class="txt">
      <center>
      <?php 
      echo "<h2>"."Massage Sent Successfully"."</h2>"."<br>";
      echo "<h3>"."Thanks For Contacting With Us"."</h3>";
      echo "<h3>"."We will shortly Get in touch with You if Required."."</h3>";
      ?>
    </center>
      </div>

<?php
  }
?>

<br><br>
<center>
<a href="index.php" class="button"> <h4> Back to Home</h4></a>
</center>
<br>



<br>
<br><br><br>

<div class="footer">
  
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
</div>
</body>
</html>
