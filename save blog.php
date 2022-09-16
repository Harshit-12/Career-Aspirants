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
	<title>Save Blog</title>


	<style type="text/css">
		
.head{

	background-color: black;
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
	</style>
</head>
<body>


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
		$sql1 = "INSERT INTO blogs (Title,image,Body,id) VALUES ('$title','$filename','$body','$id')";

		// Execute query
		mysqli_query($db, $sql1);

		?>

			<div class="head">
				<center>
					<img src="cal.png" width="50%" height="auto";>
				</center>

			</div>
			<br>
			<center>
			<h3>Blog Added Successfully</h3>
			<br>
			<a href="Admin's Dashboard.php" class="button"> <h4> Back to Dashboard</h4></a>
			</center>
<?php 

	}
?>

</body>
</html>
