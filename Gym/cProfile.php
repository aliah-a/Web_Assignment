<?php
// Start the session
session_start();
include('includes/db_connect.php');
//Make sure that the user is logged in first to be able to view profile
if(!isset($_SESSION['email'])){
  header("Location: Home.php?referer=Feedback");
}
try {
	//we get the user of the current session
    $sessEmail = "";
     $sessEmail = $_SESSION['email'];
     //echo $sessEmail;

     $sqll = "SELECT userID FROM user WHERE email = '$sessEmail' " ;
     $ql = $conn->query($sqll);
     $ql->setFetchMode(PDO::FETCH_ASSOC);

    $uid="";
    while ($row = $ql->fetch()): 
          //echo htmlspecialchars($row['userID']) ;   
          $uid= $row['userID'];
    endwhile;
    //echo $uid;
//------------------------------------STRING TO CONCATENATE ADDRESS----------
  	$str="";
//------------------------------------DISPLAY PERSONAL DETAILS----------------
    $sqll = "SELECT email, name, gender,doB, streetNum, street,city, phoneNum
               FROM user
              WHERE userID = '$uid'";

    $qq = $conn->query($sqll);
    $qq->setFetchMode(PDO::FETCH_ASSOC);




    //---------------------------------------------------------------------------
} catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
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

     table#t{
		width: 50%;
   		margin: 0 auto; /* same as margin: 0 25%;  */
	}
	h2,h3{
		text-align: center;
		font-weight: bold;
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
				<a class="nav-link" href="cHome.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="cProfile.php">Profile</a>
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
<br><br><br><br>
<!-------------------------------------------------------------------------->
<div class="jumbotron text-center" >
  <h2>Welcome to your Profile</h2>
 </div>
<br>

    <div id="container">
            <h3>Personal Details</h3><br><br><br>
            <table class="table center table-responsive table-striped table-condensed" id="t">
			    <tbody>
			         <?php while ($row = $qq->fetch()): ?>
				         <tr>
				            <th scope="row">Email Address</th>
				            <td><?php echo htmlspecialchars($row['email']); ?></td>
				        </tr>
				        <tr>
				            <th scope="row">Full Name</th>
				            <td><?php echo htmlspecialchars($row['name']) ?></td>
				        </tr>
				        <tr>
				            <th scope="row">Date of Birth</th>
				            <td><?php echo htmlspecialchars($row['doB']); ?></td>
				        </tr>
				        <tr>
				            <th scope="row">Gender</th>
				            <td><?php echo htmlspecialchars($row['gender']); ?></td>
				        </tr>
				         <tr>
				            <th scope="row">Address</th>
				             <td><?php echo htmlspecialchars($row['streetNum'].' '.$row['street'].' '.$row['city']) ?></td>
				        </tr>
				         <tr>
				            <th scope="row">Phone Number</th>
				            <td><?php echo htmlspecialchars($row['phoneNum']); ?></td>
				        </tr>
				        
			      <?php endwhile; ?>
			    </tbody>
			</table>
    </div>
  
<!----------------------------------display sessions chosen by member---------->





<div class="jumbotron text-center bg-dark">
  <p>Footer</p>
</div>
</body>
</html>

