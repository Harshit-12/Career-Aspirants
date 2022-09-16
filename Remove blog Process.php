<?php  
if (isset($_POST['submit'])) {

$db = mysqli_connect("localhost", "root", "password", "Blog_Project");

	$id=$_POST['id'];
	
	
		// Get all the submitted data from the form
		$sql1 = "delete from blogs where id='$id'";

		// Execute query
		mysqli_query($db, $sql1);
		if (mysqli_affected_rows($db)>0)
			echo "Blog Deleted Successfully";
		else
			echo "Invalid Blog id";
	}
?>