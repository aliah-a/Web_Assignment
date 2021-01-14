<?php
// Start the session
//The session_start() function must be the very first thing in your document. Before any HTML tags.
session_start();

require_once "includes/db_connect.php";
//define variables and set to empty values
try{
	$namecardErr = $cardnumErr = $dateExp = $cvvErr = $fee = $amt = "";
	$namecard = $cardnum = $dateExpErr = $cvv = $feeErr ="";

	//Get the userID of the last user who registered
    $sql = 'SELECT userID FROM user ORDER BY userID DESC LIMIT 1';

    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

    $uid="";
	while ($row = $q->fetch()): 
         // echo htmlspecialchars($row['userID']) ;	
          $uid= $row['userID'];
    endwhile;	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	//check if the page is being invoked after register form data has been submitted
		//--------------validate membership fee---------
		if (empty($_POST["txt_fee"])) {
			$feeErr = "Membership is required";
		} 
		else {
			$fee = ($_POST["txt_fee"]);
		}
		//-------------VALIDATE NAME-----------------
		if(empty($_POST["txt_namecard"])){
			//check if the field is empty
			$namecardErr = "Name on Card is required.";
		}else{
			$namecard = ($_POST["txt_namecard"]);
			//call the test_input function on $_POST["txt_name"]
			if(!preg_match("/^[a-zA-Z ]*$/", $namecard)){
				//use a regular expression to validate the name field
				$namecardErr = "Only letters and white spaces allowed.";
			}//end if
		}//end else
		//----------------VALIDATE Card Number----------------------
		if (empty($_POST["txt_cardnum"])) {
			$cardnumErr = "Card Number is required";
		} 
		else {
			$cardnum = ($_POST["txt_cardnum"]);
		}
		//------------------VALIDATE Expiry DATE--------------------
		if (empty($_POST["txt_date2"])) {
			$dateExpErr = "Expiry Date is required";
		} 
		else {
			$dateExp = ($_POST["txt_date2"]);
		}
		//---------------------Validate CVV--------------------------
		if (empty($_POST["txt_cvv"])) {
			$cvvErr = "CVV is required";
		} 
		else {
			$cvv = ($_POST["txt_cvv"]);
		}
		//------------------------------------------------------------
		if ($fee == "Monthly"){
			$amt = "1000";
		}
		else{
			$amt = "20000";
		}
		//------------------------------------------------------------
		if (($feeErr=="") && ($namecardErr=="") && ($cardnumErr =="") &&($dateExpErr=="")&&($cvvErr=="")){

			$currentDate = $currentTime ="";
			date_default_timezone_set("Asia/Yerevan");
			$currentDate = date("Y/m/d");
			$currentTime = date("h:i:sa");

			echo $currentTime;
			echo $currentDate;
			echo $cvv;
						//get the userid 
						//check if user selected sessions and add the amount of money 
						//get the current date and time of payment
			$sInsert = "INSERT INTO payment (userID, P_Amount, P_Type, nameCard, cardNum, expiryDate, CVV, P_Date, P_Time) VALUES('$uid', '$amt', '$fee', '$namecard', '$cardnum', '$dateExp', '$cvv', '$currentDate', '$currentTime')";

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$Result = $conn->exec($sInsert) ;	

			if($Result )
            {   
              $Msg = "!Success";
              echo $Msg;
            }else{
              $Msg = "ERROR: Your credentials could not be saved!";
              echo $Msg;
            }
		}
 		header("Location:Login.php");
	}//end if 
}catch (PDOException $e){
	die("Could not connect to database:" . $e->getMessage());
}
?>
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

			<form class="form-horizontal" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<br>
				<div class="form-group">    	 	
					<label class="control-label col-sm-10" style="color: turquoise;">Please, note that the monthly membership fee of Planet Fitness is Rs 1000 and the annual fee is at Rs 20 000.</label>	
				</div>

				<label class="control-label col-sm-6" style="font-size:25px;" for="cardinfo">Membership Fee</label>

				<div class="form-group">
		    	 	<div class="col-sm-10">
						 <input type="radio" value="Monthly" id="defaultRadio" name="txt_fee">
			   			 <label for="defaultRadio">Monthly</label>

			   			 <input type="radio" value="Annual" id="defaultRadio" name="txt_fee">
			   			 <label for="defaultRadio">Annual</label> 
			   			 <span class="error">* <?php echo $feeErr;?></span><br/>
		   			</div>
				</div>
				
				<label class="control-label col-sm-6" style="font-size:25px;" for="cardinfo">Card Information</label>
				<br>
				   <div class="form-group">
					   <label class="control-label col-sm-10" for="namecard">Name on Card</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" value="<?php echo $namecard; ?>"name="txt_namecard" id="namecard"  placeholder="Enter name on card">
					      <span class="error" style="color: red;">* <?php echo $namecardErr;?></span><br/>
					    </div>
				  	</div>

				  <div class="form-group">
				    <label class="control-label col-sm-10" for="cardnum">Card Number</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" value="<?php echo $cardnum; ?>"name="txt_cardnum" id="cardnum"  placeholder="Enter card number">
				      <span class="error" style="color: red;">* <?php echo $cardnumErr;?></span><br/>
				    </div>
				  </div>


				  <div class="form-group">
				    <label class="control-label col-sm-10" for="date-input2">Expiry Date</label>
				    <div class="col-sm-10">
				      <input type="date" class="form-control" value="<?php echo $dateExp; ?>" name="txt_date2" id="date_input2">
				      <span class="error" style="color: red;">* <?php echo $dateExpErr;?></span><br/>
				    </div>
				  </div>


				  <div class="form-group">
				    <label class="control-label col-sm-10" for="cvv">CVV</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" value="<?php echo $cvv; ?>" name="txt_cvv" id="cvv"  placeholder="CVV">
				      <span class="error" style="color: red;">* <?php echo $cvvErr;?></span><br/>
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