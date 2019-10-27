<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <div class="row justify-content-center">
    <form action="register.php" method="POST">

      <div class="form-group">
        <label> Username </label>
        <input type="text" name="username" placeholder="Enter Username" required class="form-control" value="<?php echo $username;?>">
      </div>

      <div class="form-group">
        <label> Email </label>
        <input type="text" name="email" placeholder="Enter email" required class="form-control" value="<?php echo $email;?>">
      </div>

      <div class="form-group">
        <label> Password </label>
        <input type="password" name="password_1" required class="form-control" placeholder="Enter Password">
      </div>

      <div class="form-group">
        <label> Password </label>
        <input type="password" name="password_2" required class="form-control" placeholder="Repeat Password" >
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
      </div>
      <p>
        Already a member? <a href="login.php">Sign in</a>
      </p>

    </form>
  </div>
</body>
</html>