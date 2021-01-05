<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment Information</title>
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
		.error {
			color: #FF0000;
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
					<a class="nav-link" href="login.php">Login</a>
				</li>

			</ul>
		</div>
		</nav>

	</header>
	<!----------------------------------------------------------------->
	<br><br><br><br><br><br>
	<h4 style="text-align: center;">Step 3 of 3</h4>
	<h1>Payment Information</h1>
	<br><br>

	<div class="container-fluid">
	  <div class="row">
	    <div class="col-sm-6">

			<form class="form-horizontal">
				<div class="form-group">
			    	 	<label class="control-label col-sm-6" style="font-size:25px;" for="paymtd">Payment Method:</label>
			    	 	<br><br>
			    	 	<div class="col-sm-10">
							 <input type="radio" value="cash" id="defaultRadio" name="paymtd">
				   			 <label for="defaultRadio">Cash</label>
				   			 <br>
				   			 <input type="radio" value="onlinepayment" id="defaultRadio" name="paymtd">
				   			 <label for="defaultRadio">Online Payment</label> 
			   			</div>
				</div>
			<label class="control-label col-sm-6" style="font-size:25px;" for="cardinfo">Card Information</label>
			<br>
			   <div class="form-group">
				   <label class="control-label col-sm-10" for="namecard">Name on Card</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="txt_namecard" id="namecard"  placeholder="Enter name on card">
				    </div>
			  	</div>

			  <div class="form-group">
			    <label class="control-label col-sm-10" for="cardnum">Card Number</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="txt_cardnum" id="cardnum"  placeholder="Enter card number">
			    </div>
			  </div>


			  <div class="form-group">
			    <label class="control-label col-sm-10" for="date-input2">Expiry Date</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" name="txt-date2" id="date-input2">
			    </div>
			  </div>


			  <div class="form-group">
			    <label class="control-label col-sm-10" for="cvv">CVV</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="txt_cvv" id="cvv"  placeholder="CVV">
			    </div>
			  </div>


				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-primary">Join Now</button>
				    </div>
			  </div>
			</form>
		</div>
		 <div class="col-sm-3">
	    	<br>
	    	<h4>Find Us</h4>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935.3883082493297!2d57.523368029175224!3d-20.31875159914921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5c43fa1abc91%3A0x432eb684d655b3b1!2sArcade%20Currimjee!5e0!3m2!1sen!2smu!4v1609764273582!5m2!1sen!2smu" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			<br><br>
			<h4>Our Location</h4><br>
			<label>1st Floor, <br>Arcades Currimjee, <br>College Ln, <br>Curepipe</label>
	    </div>
	</div>
	
	<br><br><br><br><br><br>
  <!----------------------------------------------------------------------------->
	<div class="jumbotron text-center bg-dark">
 		 <p>Footer</p>
	</div>
</body>
</html>