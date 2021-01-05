<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

 <!-- changeeeeeeeeee afterrrrrrrrrr -->
<style>
	header{
		width: 100%;
		height: 100vh;
		background: url(hero.jpg) no-repeat 50% 50%;
		background-size: cover;
	}
</style>
</head>
<body>
	
<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-dark fixed-top" >

		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
			<span class="navbar-toggler-icon"></span>
		</button>
			<a class="navbar-brand" href="Home.html" ><img src="img/Planet Fitness Logo.png" width="80" height="67">Planet Fitness</a>
		
		
		<div class="collapse navbar-collapse" id="collapse_target">
		
		<ul class="list-inline mx-auto justify-content-center">
			
			<li class="nav-item">
				<a class="nav-link" href="Home.html">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Profile.html">Profile</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
					Services
					<span class="caret"></span>
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdown_target">
					<a class="dropdown-item" href="Courses.html"> Classes</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="Equipments.html"> Equipments</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="Coaches.html"> Coaches</a>
				
				</div>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="Feedback.html">Feedback</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="About.html">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Contact.html">Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="login.php">Login</a>
			</li>

		</ul>
	</div>
	</nav>

</header>
<!-------------------------------------------------------------------------->

<div class="jumbotron text-center" >
  <h2>Welcome Back to Planet Fitness!</h2> 
</div>
<br>


<form class="form-horizontal" action="/action_page.php" >
  <div class="form-group ">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" name="txt_email" id="email" placeholder="Enter email address">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" name="txt_pwd" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
  	<div class="col-sm-offset-2 col-sm-10">
 	 <a href="Register.php">Not a member? Register Now!</a>
 	</div>
 </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Log In</button>
    </div>
  </div>

</form>



<div class="jumbotron text-center bg-dark">
  <p>Footer</p>
</div>
</body>
</html>

