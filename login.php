<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <div class="card mb-4 rounded-3 shadow-sm" style="margin: auto;width: 35%;position: absolute;top: 20%;">
  <div class="card-header py-3 text-bg-primary border-primary" style="text-align:center;">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="form-floating" style="margin: auto;width: 80%;margin-top:10px;">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
      <label for="floatingInput">Username</label>
    </div>
	<div class="form-floating" style="margin: auto;width: 80%;margin-top:10px;">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
	<div class="checkbox mb-3" style="text-align:center;">
      <label> 
        <input type="checkbox" value="remember-me" style="margin-top:10px"> Remember me
      </label>
    </div>
    <div style="margin: auto;width: 30%;">
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login_user" >Login</button>
    </div>  
  	<p style="text-align:center;vertical-align: middle;margin-top:10px">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>


<style>
.text-center {
    text-align: center!important;
}
body {
    display: flex;
	justify-content: center;
	align-items: center;
}
.error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
}

</style>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
