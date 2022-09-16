<!DOCTYPE html>
<html>
<head>
	<title>Reviews</title>
<style type="text/css">
*{
    margin:0px;
}
.head{
background-color: black;
/* margin: 5px; */

}

.Details{
	padding: 20px;
	text-align: left;
	/* background-image: url('cool-bg.png');
     */
     background-color:#edf1ff;
}
.subhead{
	background-image: url('blue.jpg');
	padding: 15px;
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
<div class="head">
    <center>
    <img src="cal.png" width="50%" height="auto";>
  </center>
  </div>
  	<center>
<div class="subhead">
<h2>Details of Candidates Who tried to Contact</h2>
</div>

<?php
	// echo "<br>";
$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");
$result = mysqli_query($db, "SELECT * FROM Contact");?>
<div class="Details">
<?php 

while($data = mysqli_fetch_array($result))
{	
	echo "<b>"."Name = "."</b>".$data['Name']."<br>";
	echo "<b>"."Email = "."</b>".$data['email']."<br>";
	echo "<b>"."Contact Number = "."</b>".$data['phone']."<br>";
	echo "<b>"."Massage = "."</b>".$data['massage']."<br>";
	echo "<b>"."Date  = "."</b>".$data['Cdate']."<br>"."<br>"."<br>";

} 


?>
</div>

<br><br>
<a href="test-admin.php" class="button"> <h4> Back to Dashboard</h4></a>
<br>	
<br>

</center>
</body>
</html>
