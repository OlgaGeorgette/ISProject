<?php 
	session_start();
	$conn = new mysqli('localhost','root','','restapp') or die(mysqli_error($mysqli));

	$username='';
	$email='';
	$password='';
	$update=false;

	if (isset($_POST['save'])) {
		$username = $conn->real_escape_string($_POST['username']);
		$email = $conn->real_escape_string($_POST['email']);
		$password = $conn->real_escape_string($_POST['password']);

		$sql="INSERT INTO users (username, email, password) VALUES ('$username', '$email','$password')"; 

		$_SESSION['message'] = "Account saved"; 
		header('location: edituser.php');
	
		if ($conn->query($sql) == TRUE) {
			
			$_SESSION['message'] = "Record has been saved!";
			$_SESSION['msg_type'] = "success";
			header("location: edituser.php");
	}

	}

	else if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$mysqli->query("DELETE FROM users WHERE id=$id") or die($mysqli->error);


		$_SESSION['message'] = "Record has been deleted!";
		$_SESSION['msg_type'] = "danger";
		header("location: edituser.php");
	}

	else if (isset($_GET['edit'])) {
		$id=$_GET['edit'];
		$update=true;
		$result=$conn->query("SELECT * FROM users WHERE id=$id" ) or die($mysqli->error);

		//if record exists
		if (count($result)==1) {
			$row = $result->fetch_array();
			$username=$row['username'];
			$email=$row['email'];
			$password=$row['password'];
		}

		$_SESSION['message'] = "Record has been edited!";
		$_SESSION['msg_type'] = "info";
		header("location: edituser.php");
	}
?>