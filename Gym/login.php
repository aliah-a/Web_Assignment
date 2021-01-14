<?php
// Start the session
//The session_start() function must be the very first thing in your document. Before any HTML tags.
session_start();
// define variables and set to empty string values
try {

$emailErr = $passwordErr = "";
$email = $userpassword =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["txt_email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["txt_email"];
  }//end else
  if (empty($_POST["txt_password"])) {
    $passwordErr = "Password is required";
  } else {
    $userpassword= $_POST["txt_password"]; 
  }//end else
  if($emailErr == "" && $passwordErr == "" )
  {
    //We hashed passwords using   
    //$hashed_password = password_hash($password,PASSWORD_DEFAULT);
  	//References http://php.net/manual/en/function.password-verify.php
  	require_once "includes/db_connect.php";
  	$sQuery = "SELECT * FROM user WHERE email = '$email'  ";

  	#echo $sQuery;
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $Result = $conn->query($sQuery) ;
    $userResults = $Result->fetch(PDO::FETCH_ASSOC);

    if($userResults['email'] )//the user exists
    {	
    	$hashed_password = $userResults['password'];
    	if(password_verify($userpassword,$hashed_password))
    	{
    		$_SESSION['email'] = $email;
    		#echo $_SESSION['$email'];
         $sessEmail = "";
         $sessEmail = $_SESSION['email'];
         //echo $sessEmail;

         $sqll = "SELECT userType FROM user WHERE email = '$sessEmail' " ;
         $ql = $conn->query($sqll);
         $ql->setFetchMode(PDO::FETCH_ASSOC);

        $ut="";
        while ($row = $ql->fetch()): 
              //echo htmlspecialchars($row['userID']) ;   
              $ut= $row['userType'];
        endwhile;
        echo $ut;
        if($ut=='Normal'){
            header("Location: Home.php?referer=login");
        }
        else{
          if($ut =='Coach'){
              header("Location: cHome.php?referer=login");
          }
          else{
            header("Location: aHome.php?referer=login");
          }
        }
    	}
    	else
    	{
    		$Msg = "Password ERROR: Your credentials seem to be wrong. Try again or make sure you are a registered user!";
       		echo $Msg;
    	}   	
    }else{
       $Msg = "User name ERROR: Your credentials seem to be wrong. Try again or make sure you are a registered user!";
       echo $Msg;   	
    }
  }//end if  
 }
} catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}//end else 
?>
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
	<!--
		<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-dark fixed-top" >

		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
			<span class="navbar-toggler-icon"></span>
		</button>
			<a class="navbar-brand" href="Home.php" ><img src="img/Planet Fitness Logo.png" width="80" height="67">Planet Fitness</a>	
		<div class="collapse navbar-collapse" id="collapse_target">	
		<ul class="list-inline mx-auto justify-content-center">		
			<li class="nav-item">
				<a class="nav-link" href="Home.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Profile.php">Profile</a>
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
				<a class="nav-link" href="Feedback.php">Feedback</a>
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
-->
</header>
<!-------------------------------------------------------------------------->
<div class="jumbotron text-center" >
  <h2>Welcome Back to Planet Fitness!</h2> 
</div>
<br>
<form class="form-horizontal" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" >
  <div class="form-group ">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" name="txt_email" id="email" placeholder="Enter email address">
      <span class="error" style="color: red;">* <?php echo $emailErr;?> </span><br/><br/> 
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" name="txt_password" id="pwd" placeholder="Enter password">
      <span class="error" style="color: red;">* <?php echo $passwordErr;?></span><br/><br/> 
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

