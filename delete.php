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
	<title>Delete Blog</title>

<style type="text/css">
	
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
.head{
background-color: black;
margin: 5px;

}
</style>
</head>
<body>
<div class="head">
    <center>
    <img src="cal.png" width="50%" height="auto";>
  </center>
  </div>
  

<?php  

$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");

	$id=$_GET['id'];
	
	
		// Get all the submitted data from the form
		$sql1 = "delete from blogs where id='$id'";

		// Execute query
		mysqli_query($db, $sql1);
		if (mysqli_affected_rows($db)>0)
			echo "<center>"."<h3>"."Blog Deleted Successfully"."<h3>"."</center>";
		else
			echo "Invalid Blog id";
	
?>
<br>
<center>
<a href="Admin's Dashboard.php" class="button">Back To Dashboard</a>
</center>
</body>
</html>