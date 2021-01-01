<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Now</title>
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

	.error {
		color: #FF0000;
	}

</style>
</head>
<body>

<?php
	//define variables and set to empty values
	$emailErr = $nameErr = $passwordErr= $genderErr = $streetNumErr = $streetErr = $cityErr = $phoneErr = "";
	$email = $name = $password = $gender = $streetNum = $street = $city = $phone;

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		//check if the page is being invoked after register form data has been submitted

		//--------VALIDATE EMAIL-----------------
		if(empty($_POST["txt_email"])){
			//check if the field is empty
			$emailErr = "Email is required.";
		}
		else{
			$email = test_input($_POST["txt_email"]);
			//call the test_input function on $_POST["txt_email"]
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				//use a regular expression to validate the email field
				$emailErr = "Please, use a valid email address.";
			}//end if
		}//end else

		//-------------VALIDATE NAME-----------------
		if(empty($_POST["txt_name"])){
			//check if the field is empty
			$nameErr = "name is required.";
		}else{
			$name = test_input($_POST["txt_name"]);
			//call the test_input function on $_POST["txt_name"]
			if(!preg_match("/^[a-zA-Z ]*$/", $name)){
				//use a regular expression to validate the name field
				$nameErr = "Only letters and white spaces allowed.";
			}//end if
		}//end else

		//---------------------VALIDATE PASSWORD---------------
		if(empty($_POST["txt_pwd"])){
			//check if the field is empty
			$passwordErr = "Password is required.";
		}else{
			$password = test_input($_POST["txt_pwd"]);
			//call the test_input function on $_POST["txt_pwd"]
			if(!preg_match("/^[a-zA-Z0-9]*$/", $password)){
				//use a regular expression to validate the password field
				$passwordErr = "Only letters and numbers allowed.";
			}//end if
		}//end else

		//----------------VALIDATE GENDER-----------------
		if (empty($_POST["txt_gender"])) {
		    $genderErr = "Gender is required";
		} 
		else {
		    $gender = test_input($_POST["txt_gender"]);
		}
		


		//----------------VALIDATE ADDRESS---------------------
		if (empty($_POST["txt_streetNum"])) {
		    $streetNumErr = "Street number is required";
		} 
		else {
		    $streetNum = test_input($_POST["txt_streetNum"]);
		}
		

		if (empty($_POST["txt_street"])) {
		    $streetErr = "Street is required";
		}
		else {
		    $street = test_input($_POST["txt_street"]);
		}
		

		if (empty($_POST["txt_city"])) {
		    $cityErr = "City is required";
		} 
		else {
		    $city = test_input($_POST["txt_city"]);
		}
		

		//-------------------VALIDATE PHONE NUMBER------------------
		if(empty($_POST["txt_phonenum"])){
			//check if the field is empty
			$phoneErr = "Phone number is required.";
		}else{
			$phone = test_input($_POST["txt_phonenum"]);
			//call the test_input function on $_POST["txt_phonenum"]
			if(!preg_match("/^[0-9]*$/", $phone)){
				//use a regular expression to validate the phone number field
				$phoneErr = "Only numbers allowed.";
			}//end if
		}//end else
	}

	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
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
					<a class="dropdown-item" href="Courses.html"> Courses</a>
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
				<a class="nav-link" href="login.php">Login</a>
			</li>

		</ul>
	</div>
	</nav>

</header>
<!-------------------------------------------------------------------------->


<div class="jumbotron text-center" >
  <h2>‘Action is the foundational key to all success.’— Pablo Picasso</h2> 
  <p> Come and join us at Planet Fitness!</p>
  <a href="login.php">Already a member? Login Now!</a>
</div>
<br>


<form class="form-horizontal" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" >
	<fieldset>
  <div class="form-group ">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" name="txt_email" id="email" value="<?php echo $email; ?>" placeholder="Enter email address">
      <span class="error">* <?php echo $emailErr;?></span><br/>
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="txt_name" id="name" value="<?php echo $name; ?>" placeholder="Enter name">
      <span class="error">* <?php echo $nameErr;?></span><br/>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" name="txt_pwd" id="pwd" value="<?php echo $password; ?>" placeholder="Enter password">
      <span class="error">* <?php echo $passwordErr;?></span><br/>
    </div>
  </div>

   	<div class="form-group">
    	 	<label class="control-label col-sm-2" for="pwd">Gender:</label>

    	 	<div class="col-sm-10">
				 <input type="radio" value="male" id="defaultRadio" name="txt_male">
	   			 <label for="defaultRadio">Male</label>

	   			 <input type="radio" value="female" id="defaultRadio" name="txt_female">
	   			 <label for="defaultRadio">Female</label> 

	   			 <input type="radio" value="other" id="defaultRadio" name="txt_other">
	   			 <label for="defaultRadio">Other</label> 

	   			 <span class="error">* <?php echo $genderErr;?></span><br/>
   			</div>
	</div>

 	<div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Address</label>
    <div class="col-sm-2">
    	<label class="control-label col-sm-3 " for="streetnum">StreetNumber:</label>
        <input type="text" class="form-control" name="txt_streetNum" id="streetnum" value="<?php echo $streetNum; ?>" placeholder="Enter street number">
        <span class="error">* <?php echo $streetNumErr;?></span><br>

        <label class="control-label col-sm-3" for="street">Street:</label>
        <input type="text" class="form-control" name="txt_street" id="street" value="<?php echo $street; ?>" placeholder="Enter street name">
        <span class="error">* <?php echo $streetErr;?></span><br/>

        <label class="control-label col-sm-3" for="city">City:</label>
        <input type="text" class="form-control" name="txt_city" id="city" value="<?php echo $city; ?>" placeholder="Enter city name">
        <span class="error">* <?php echo $cityErr;?></span><br/>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">Phone Number:</label>
    <div class="col-sm-3">
      <input type="number" class="form-control" name="txt_phonenum" id="phone" value="<?php echo $phone; ?>" placeholder="Enter phone number">
      <span class="error">* <?php echo $phoneErr;?></span><br/>
    </div>
  </div>
</fieldset>

	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	     	<a href="login.php">Already a member? Log in.</a>
	     </div>
  	</div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </div>

</form>



<div class="jumbotron text-center bg-dark">
  <p>Footer</p>
</div>
</body>
</html>

