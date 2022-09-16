
<?php
    //   $id = file_get_contents('php://input');
	
	$id=$_GET['id'];
	
	

$db = mysqli_connect("sql109.epizy.com", "epiz_29295809", "cikLNE1KZHWSyrR", "epiz_29295809_blog_project");


$result = mysqli_query($db, "SELECT * FROM blogs where id='$id'");

$data = mysqli_fetch_row($result);

    
//echo $data[0];



	//<?php// echo "Book Name ". $data['Bname']."<br>"; 
	 $title=$data[0];
	 $img=$data[1];
	 $body=$data[2];
	
	 

	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Blog
	</title>
	<style type="text/css">
		
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

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

.button {
  background-color: red;
  color: white;
  padding: 12px 15px;
  border: none;
  margin-left: 20px;
  border-radius: 8px;
  text-decoration: none;
  cursor: pointer;
}

.button:hover{
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  width: 60%;
  background-color: #f2f2f2;
  padding: 20px;
  border-color: black;
  box-shadow: 7px 10px 15px #888888;
}

a:link, a:visited {
  background-color: #red;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #45a049;
}

	</style>
</head>
<body>
	<center>
	<div class="header"><h1>Edit Blog</h1> </div>

	<div class="container">
	
	<h3>Enter Blog Details</h3>
	<form action="Update.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		Blog Title <br>
		<input type="text" value="<?php echo $title;?>" name="title" required>
		<br>
		<br>
		Blog Image<br>
		<input type="file" name="uploadfile" value="<?php echo $img;?>"/>
		<br><br>
		Blog Content <br>
		<textarea id="subject" name="body" placeholder="Write Your Blog Content.." style="height:200px" required>
			<?php echo $body;?>

		</textarea>

		<br>
		
		<input type="submit" name="submit"> 
		<a href="Admin's Dashboard.php" class="button">Cancel</a>

</form>
		
		</div>
<br>
</center>
</body>
</html>