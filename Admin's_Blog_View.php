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

	<title>Blog Details</title>
	<style type="text/css">
.blogs
{
	border-radius: 5px;
  width: 90%;
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


}

.txt
{
    text-align:left;
    
}
.hd{
  background-image: url('cool-bg.png');
  padding: 5px;
  border-radius: 5px;
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

	<center>
		<div class="blogs">
<?php
    //   $id = file_get_contents('php://input');
	
	$id=$_GET['id'];
	
	
$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");

$result = mysqli_query($db, "SELECT * FROM blogs where id='$id'");

$data = mysqli_fetch_row($result);

    ?>
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
<br>
<a href="Admin's Dashboard.php" class="button">Back to Dashboard</a>
</center>
  </body>
</html>
