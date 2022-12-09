<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
</head>
<body>
<div class="card mb-4 rounded-3 shadow-sm" style="margin: auto;width: 35%;position: absolute;top: 20%;">
  <div class="card-header py-3 text-bg-primary border-primary" style="text-align:center;">
  	<h2>Register</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="form-floating" style="margin: auto;width: 80%;margin-top:10px;">
	  <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" value="<?php echo $username; ?>">
      <label >Username</label>
	  </div>
	<div class="form-floating" style="margin: auto;width: 80%;margin-top:10px;">
	  <input type="text" class="form-control" id="floatingInput" placeholder="Your name" name="names" value="<?php echo $name; ?>">
      <label >Your name</label>
  	</div>
  	<div class="form-floating" style="margin: auto;width: 80%;margin-top:10px;">
	  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $email; ?>">
      <label >Email</label>
  	</div>
  	<div class="form-floating" style="margin: auto;width: 80%;margin-top:10px;">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_1" >
      <label>Password</label>
    </div>
	<div class="form-floating" style="margin: auto;width: 80%;margin-top:10px;">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" name="password_2" >
      <label>Confirm Password</label>
    </div>
  	<div class="form-floating" style="margin: auto;width: 40%;margin-top:10px;">
  	  <button type="submit" class="w-100 btn btn-lg btn-primary" name="reg_user">Register</button>
  	</div>
  	<p style="text-align:center;vertical-align: middle;">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</body>
<style>
.text-center {
    text-align: center!important;
}
body {
    display: flex;
	justify-content: center;
	align-items: center;
}

</style>
</html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
