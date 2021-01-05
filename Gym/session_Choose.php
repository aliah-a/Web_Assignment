<!DOCTYPE html>
<html lang="en">
<head>
  <title>Choose Session</title>
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
	<h4 style="text-align: center;">Step 2 of 3</h4>
	<h1>Choose Your Session(s)</h1>
	<br><br>



	<div class="table-responsive">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Saturday</th>    
        </tr>
      </thead>
      <tbody>
        <tr class="table-info">
          <td >[6001]<br>9h30-10h30<br>Pilates<br>Room 1.4</td>
          <td></td>
          <td >[6002]<br>9h30-10h30<br>Zumba<br>Room 2.0</td>
          <td></td>
          <td>[6003]<br>9h30-10h30<br>Yoga<br>Room 1.0</td>
          <td></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td></td>
          <td >[6004]<br>10h30-11-30<br>Barre<br>Room 2.0</td>
          <td></td>
          <td >[6005]<br>10h30-11-30<br>Strength Training<br>Room 1.6</td>
          <td></td>
          <td>[6006]<br>10h30-11-30<br>Pilates<br>Room 1.4</td>         
        </tr>
      </tbody>
       <tbody>
        <tr class="table-info">
          <td>[6007]<br>13h30-14-30<br>Barre<br>Room 1.4</td>
          <td></td>
          <td >[6008]<br>13h30-14-30<br>Strength Training<br>Room 2.0</td>
          <td></td>
          <td >[6009]<br>13h30-14-30<br>Yoga<br>Room 1.0</td>
          <td></td>
        </tr>
      </tbody>
      
    </table>
  </div>
  <br>
	<form class="form-horizontal">
		<div class="form-group">
	    	 	<label class="control-label col-sm-6" style="font-size:25px;" for="pwd">Which session(s) do you wish to attend?</label>
	    	 	<br><br>
	    	 	<div class="col-sm-10">
					 <input type="radio" value="male" id="defaultRadio" name="ses_1">
		   			 <label for="defaultRadio">6001</label>

		   			 <input type="radio" value="female" id="defaultRadio" name="ses_2">
		   			 <label for="defaultRadio">6002</label> 

		   			 <input type="radio" value="other" id="defaultRadio" name="ses_3">
		   			 <label for="defaultRadio">6003</label> 

		   			  <input type="radio" value="male" id="defaultRadio" name="ses_4">
		   			 <label for="defaultRadio">6004</label>

		   			 <input type="radio" value="female" id="defaultRadio" name="ses_5">
		   			 <label for="defaultRadio">6005</label> 

		   			 <input type="radio" value="other" id="defaultRadio" name="ses_6">
		   			 <label for="defaultRadio">6006</label> 

		   			  <input type="radio" value="male" id="defaultRadio" name="ses_7">
		   			 <label for="defaultRadio">6007</label>

		   			 <input type="radio" value="female" id="defaultRadio" name="ses_8">
		   			 <label for="defaultRadio">6008</label> 

		   			 <input type="radio" value="other" id="defaultRadio" name="ses_9">
		   			 <label for="defaultRadio">6009</label> 

		   		
	   			</div>
		</div>
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Next</button>
		    </div>
	  </div>
	</form>
	<br><br><br>
  <!----------------------------------------------------------------------------->
	<div class="jumbotron text-center bg-dark">
 		 <p>Footer</p>
	</div>
</body>
</html>