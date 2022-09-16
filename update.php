<?php

session_start();

  ?>


<?php 
if(!isset($_SESSION['Username'])){
    die(header("location: 404.php"));
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Update Blog</title>

<style type="text/css">
	
.head{
background-color: black;
margin: 5px;

}
.button {
  background-color: #99cc00; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  border-radius: 10px;
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

.hd{
	background-image: url('cool-bg.png');
	padding: 20px;
	text-align: center;
}
</style>
</head>
<body>

<div class="head">
  <center>
    <img src="cal.png" width="50%" height="auto";>
 </center>
 </div>
 <div class="hd">
<?php  
if (isset($_POST['submit'])) {

$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");

	$id=$_POST['id'];
	$title=$_POST['title'];
	$body=$_POST['body'];

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "image/".$filename;

	
		// Get all the submitted data from the form
		$sql1 = "Update blogs set Title='$title',image='$filename',Body='$body' where id='$id'";

		// Execute query
		mysqli_query($db, $sql1);
			echo "<h2>"."Blog Updated Successfully"."</h2>";
	}
?>
</div>
<br>
<center>
<a href="Admin's Dashboard.php" class="button"> <h4> Back to Dashboard</h4></a>
</center>
</body>
</html>
