<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
   <div class="row justify-content-center">
    <form action="login.php" method="POST">
      
      <div class="form-group">
        <label> Username </label>
        <input type="text" name="username" placeholder="Enter Username" required class="form-control" value="<?php echo $username;?>">
      </div>
    
      <div class="form-group">
        <label> Password </label>
        <input type="password" name="password" required class="form-control" placeholder="Enter Password">
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
</body>
</html>