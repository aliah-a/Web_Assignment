<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style> 
     li a.active {
    /*background-color: #111;*/
       color: red;
      }
  </style>
</head>
<body>
<header>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-dark fixed-top" >

    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-brand" href="cHome.php" ><img src="img/Planet Fitness Logo.png" width="80" height="67">Planet Fitness</a>
    
    
    <div class="collapse navbar-collapse" id="collapse_target">
    
    <ul class="list-inline mx-auto justify-content-center">
      
      <li class="nav-item">
        <a class="nav-link active" href="cHome.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cProfile.php">Profile</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="Attendance.php">Attendance</a>
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
<?php
  if(isset($_GET['referer'])){
    if($_GET['referer'] == 'login')
    {
     echo "Welcome " . $_SESSION['email'];
    }//end if
    if($_GET['referer'] == 'Feedback')
    {
     echo "Please <a href='login.php'>login</a> first to complete a review";
    }//end if
    if($_GET['referer'] == 'Profile')
    {
      echo "Please <a href='login.php'>login</a> first to view your profile";
    }
  }//if(isset($_GET['referer']))
  ?>  


  <br>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel_3.jpg" alt="classes" width="1980" height="1000">
    </div>
    <div class="carousel-item">
      <img src="img/carousel_2.jpg" alt="equips" width="1980" height="1000">
    </div>
    <div class="carousel-item">
      <img src="img/carousel_1.jpg" alt="barbel" width="1980" height="1000">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
	<br>

	<h1 style="text-align: center; font-weight: bold;">Welcome to Planet Fitness</h1><br>
	<h5> Located at the heart of Curepipe, Planet Fitness is a high-class gym, <br> and is open 24/7 to keep you in shape during your holiday or business trip.</h5><br>


	<h5>Planet Fitness welcomes everyone who wish to become a member, <br>and sign up for group classes taught by our certified coaches,<br> and use gym equipments such as the weight training and cardio machines.</h5><br>
	<h5> Planet Fitness provides a number of group classes from Yoga, Aerobics, Pilates to high energy Zumba and stretching.</h5>
	<h5> Register Now!</h5>
	<br>
	<h1>Our Group Classes</h1>
	<br>
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


	<h1>Meet Our Coaches</h1>
	<h1>Why Choose Us?</h1>

</body>
</html>