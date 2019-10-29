<!DOCTYPE html>
<html>
<head>
	<title> admin-user crud</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	

</head>
<body>


	<?php require_once 'process.php'; ?>


	<?php if (isset($_SESSION['message'])): ?>
		<!--uses whichever class is called-->
		<div class="alert alert-<?=$_SESSION['msg_type']?>"> 
			
			<?php 
				echo $_SESSION['message'];
				unset ($_SESSION['message']);
			?>

		</div>

	<?php endif ?>
	
	<div class="row justify-content-center">
		<form action="process.php" method="POST">
			<div class="form-group">
				<label> Username </label>
				<input type="text" name="username" placeholder="Enter Username" required class="form-control" >
			</div>
			<div class="form-group">
				<label> Email </label>
				<input type="text" name="email" placeholder="Enter email" required class="form-control" >
			</div>
			<div class="form-group">
				<label> Password </label>
				<input type="password" name="password" required class="form-control" >
			</div>
			<div class="form-group">
				<?php if ($update == true): ?>
					<button type="submit" name="update" class="btn btn-info" placeholder="Password"/> Update</button>
				<?php else: ?>
					<button type="submit" id="submit" name="save" class="btn btn-primary" placeholder="Password"/> Save</button>
				<?php endif; ?>
			</div>
			
		</form>
	</div>

	<div class="container">
	<?php 
		$mysqli = new mysqli('localhost','root','','restapp') or die($mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM users") or die($mysqli->error);
		//$pre_r($result);
		?>


	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr>
					<th> Username </th>
					<th> Email </th>
					<th> Password </th>
					<th colspan="2"> Action </th>
				</tr>
			</thead>
				<?php 
					while ($row = $result->fetch_assoc()):?>  <!--pulling records from the database-->
					<tr>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['password'];?></td>
						<td>
							<a href="edituser.php?edit=<?php echo $row['id'];?>" class="btn btn-info"> Edit </a>
							<a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger"> Delete </a>
						</td>
					</tr>
				<?php endwhile; ?>
		</table>
	</div>


	<?php
		function pre_r($array) {
			echo '<pre>';
			print_r($array);
			echo '</pre';
		}
	?>



	</div>
<div class="form-group" style="text-align: center;" >
	<button class="btn btn-primary"><a href="mainpage.php" style="color: white;">Homepage</a></button>
</div>

</body>
</html>