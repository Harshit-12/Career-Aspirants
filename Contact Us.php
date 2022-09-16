<!DOCTYPE html>
<html>
<head>
<title>Contact US</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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

.desc{
  padding: 20px;
  font-size: 16px;
  background-image: url('cool-bg.png');
  font-family: Comic Sans MS, Comic Sans;
  text-align: left; 
  width: 90%;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=tel], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #00ff00;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  width: 80%;
  background-color: #f2f2f2;
  padding: 20px;
  border-color: black;
  box-shadow: 7px 10px 15px #888888;
}

.heading{
  text-align: center;
  background-image: url('cool-bg.png');
  padding: 5px;
  border-radius: 5px;
  
}


</style>
<script type="text/javascript">
  function Blog_Page()
  {
    location.replace("Blogs.php")
  }

</script>

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

<div class="heading">
  <h1><center>Contact Us</center></h1>
</div>

<br><br>

<center>
<img src="contact.jpg" width="95%" height="auto">
<br><br>
<center>
  <h3>Given Your valuable Suggesstions and Reviews </h3>
</center>
<br>
<div class="desc">
We strive for continous improvement not to attain perfection. We have coupled our hard work with passion to create this plateform but there is always a room for improvement and we strongly believe that your suggesstions would do that.<br><br>
If you want to contribute a blog related to this plateform we welcome your ideas by open heart and we ensure you to publish it by your Name if it deserves to be published.
<br>
Growth is never by mere chance, it is the result of forces working together so we invite your ideas that will help us to grow and improve this plateform to help others.<br><br>
Life is about growth and exploration, not achieving a fixed state of balance. You have a very limited time on earth to experience all that you can. Figuring out how to squeeze the most out of your family, work, and spirituality is your life's purpose.Come and join us to become the part of this life changing plateform.

</div>
<br>
<center>
<br>
<br>
  <h2>Get in Touch With US</h2>

<div class="container">
  <form action="save contact.php" method="POST">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="Name" placeholder="Enter Your Name.." required>

    
    <label for="country">Email</label>
    <input type="email" id="Email" name="Email" placeholder="Enter Your Email.." required>
    <label for="country">Contact Number</label>
    <input type="tel" id="phone" name="Phone" placeholder="Enter Your Contact Number.." required>
    

    <label for="subject">Massage</label>
    <textarea id="subject" name="Massage" placeholder="Write Your Massage.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Send Massage">
  </form>
</div>

<br>
<br>

<br>
<br>

<div class="footer">
  <br>
  <a  class="footer" href="index.php">  Home </a>
  <a class="footer" href="All Blogs.php">  Blogs </a>
  <a class="footer" href="About Us.php">  About US </a>
  <a class="footer" href="Contact Us.php">  Contact Us  </a>
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
