

<!DOCTYPE html>
<html>
<head>
	<title>Add Blog
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

.container {
  border-radius: 5px;
  width: 60%;
  background-color: #f2f2f2;
  padding: 20px;
  border-color: black;
  box-shadow: 7px 10px 15px #888888;
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
	<center>
	<div class="header"><h1>Add a New Blog</h1> </div>

	<div class="container">
	
	<h3>Enter Blog Details</h3>
	<form action="Save_Blog.php" method="POST" enctype="multipart/form-data">
        Blog Id <br>
        <input type="number" name="id" required>
        <br><br>
		Blog Title <br>
		<input type="text" name="title" required>
		<br>
		<br>
		Blog Image<br>
		<input type="file" name="uploadfile" value=""/>
		<br><br>
		Blog Content <br>
		<textarea id="subject" name="body" placeholder="Write Your Blog Content.." style="height:600px" required></textarea>

		<br>
		
		<input type="submit" name="submit">
</form>
		
</div>
<br><br>
<a href="Admin's Dashboard.php" class="button"> <h4> Back to Dashboard</h4></a>
<br>	
<br>

</center>
</body>
</html>