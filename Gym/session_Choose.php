<?php
require_once 'includes/db_connect.php';

try {

	//Get the userID of the last user who registered
    $sql = 'SELECT userID FROM member ORDER BY userID DESC LIMIT 1';

    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

    $uid="";
	while ($row = $q->fetch()): 
          echo htmlspecialchars($row['userID']) ;	
          $uid= $row['userID'];
    endwhile;	
  
  	echo $uid;

    $ses_1 = $ses_2 = $ses_3 = $ses_4 = $ses_5 = $ses_6 = $ses_7 = $ses_8 = $ses_9 ="";
    $sesErr ="Session is Required";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //check if the page is being invoked after register form data has been submitted

		//--------make sure session is not empty if click on next-----------------

		
				//--------------------------------check if the user has chosen a session id 6001----------------------------------
				if(!empty($_POST["ses_1"])){

					$ses_1 = $_POST["ses_1"];
					
					//get the information about session 6001 from the Timetable table
					$sqll = "SELECT classID, facilityID, day, startTime, endTime FROM timetable WHERE t_ID = $ses_1";

					
				  	$qq = $conn->query($sqll);
                     $qq->setFetchMode(PDO::FETCH_ASSOC);

                     $cid = $fid = $d = $st =$et ="";

                     while ($row = $qq->fetch()): 
                          echo htmlspecialchars($row['classID']) ;   
                          $cid= $row['classID'];
                          echo htmlspecialchars($row['facilityID']) ;   
                          $fid= $row['facilityID'];
                          echo htmlspecialchars($row['day']) ;   
                          $d= $row['day'];
                          echo htmlspecialchars($row['startTime']) ;   
                          $st= $row['startTime'];
                          echo htmlspecialchars($row['endTime']) ;   
                          $et= $row['endTime'];
                          
                     endwhile;

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_1', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $Result = $conn->exec($sInsert) ;
                   /*
                    if($Result )
                    {   
                        $Msg = "!Success";
                        echo $Msg;
                    }else{
                       $Msg = "ERROR: Your credentials could not be saved!";
                       echo $Msg;
                    }*/
				}

				//--------------------------------check if the user has chosen a session id 6002----------------------------------
				if(!empty($_POST["ses_2"])){

					$ses_2 = $_POST["ses_2"];
					
					//get the information about session 6001 from the Timetable table
					$sqll = "SELECT classID, facilityID, day, startTime, endTime FROM timetable WHERE t_ID = $ses_2";

					
				  	$qq = $conn->query($sqll);
                     $qq->setFetchMode(PDO::FETCH_ASSOC);

                     $cid = $fid = $d = $st =$et ="";

                     while ($row = $qq->fetch()): 
                          echo htmlspecialchars($row['classID']) ;   
                          $cid= $row['classID'];
                          echo htmlspecialchars($row['facilityID']) ;   
                          $fid= $row['facilityID'];
                          echo htmlspecialchars($row['day']) ;   
                          $d= $row['day'];
                          echo htmlspecialchars($row['startTime']) ;   
                          $st= $row['startTime'];
                          echo htmlspecialchars($row['endTime']) ;   
                          $et= $row['endTime'];
                          
                     endwhile;

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_2', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $Result = $conn->exec($sInsert) ;
                   /*
                    if($Result )
                    {   
                        $Msg = "!Success";
                        echo $Msg;
                    }else{
                       $Msg = "ERROR: Your credentials could not be saved!";
                       echo $Msg;
                    }*/
				}

				//--------------------------------check if the user has chosen a session id 6003----------------------------------
				if(!empty($_POST["ses_3"])){

					$ses_3 = $_POST["ses_3"];
					
					//get the information about session 6001 from the Timetable table
					$sqll = "SELECT classID, facilityID, day, startTime, endTime FROM timetable WHERE t_ID = $ses_3";

					
				  	$qq = $conn->query($sqll);
                     $qq->setFetchMode(PDO::FETCH_ASSOC);

                     $cid = $fid = $d = $st =$et ="";

                     while ($row = $qq->fetch()): 
                          echo htmlspecialchars($row['classID']) ;   
                          $cid= $row['classID'];
                          echo htmlspecialchars($row['facilityID']) ;   
                          $fid= $row['facilityID'];
                          echo htmlspecialchars($row['day']) ;   
                          $d= $row['day'];
                          echo htmlspecialchars($row['startTime']) ;   
                          $st= $row['startTime'];
                          echo htmlspecialchars($row['endTime']) ;   
                          $et= $row['endTime'];
                          
                     endwhile;

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_3', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $Result = $conn->exec($sInsert) ;
                   /*
                    if($Result )
                    {   
                        $Msg = "!Success";
                        echo $Msg;
                    }else{
                       $Msg = "ERROR: Your credentials could not be saved!";
                       echo $Msg;
                    }*/
				}

				//--------------------------------check if the user has chosen a session id 6004----------------------------------
				if(!empty($_POST["ses_4"])){

					$ses_4 = $_POST["ses_4"];
					
					//get the information about session 6001 from the Timetable table
					$sqll = "SELECT classID, facilityID, day, startTime, endTime FROM timetable WHERE t_ID = $ses_4";

					
				  	$qq = $conn->query($sqll);
                     $qq->setFetchMode(PDO::FETCH_ASSOC);

                     $cid = $fid = $d = $st =$et ="";

                     while ($row = $qq->fetch()): 
                          echo htmlspecialchars($row['classID']) ;   
                          $cid= $row['classID'];
                          echo htmlspecialchars($row['facilityID']) ;   
                          $fid= $row['facilityID'];
                          echo htmlspecialchars($row['day']) ;   
                          $d= $row['day'];
                          echo htmlspecialchars($row['startTime']) ;   
                          $st= $row['startTime'];
                          echo htmlspecialchars($row['endTime']) ;   
                          $et= $row['endTime'];
                          
                     endwhile;

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_4', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $Result = $conn->exec($sInsert) ;
                   /*
                    if($Result )
                    {   
                        $Msg = "!Success";
                        echo $Msg;
                    }else{
                       $Msg = "ERROR: Your credentials could not be saved!";
                       echo $Msg;
                    }*/
				}

				//--------------------------------check if the user has chosen a session id 6005----------------------------------
				if(!empty($_POST["ses_5"])){

					$ses_5 = $_POST["ses_5"];
					
					//get the information about session 6001 from the Timetable table
					$sqll = "SELECT classID, facilityID, day, startTime, endTime FROM timetable WHERE t_ID = $ses_5";

					
				  	$qq = $conn->query($sqll);
                     $qq->setFetchMode(PDO::FETCH_ASSOC);

                     $cid = $fid = $d = $st =$et ="";

                     while ($row = $qq->fetch()): 
                          echo htmlspecialchars($row['classID']) ;   
                          $cid= $row['classID'];
                          echo htmlspecialchars($row['facilityID']) ;   
                          $fid= $row['facilityID'];
                          echo htmlspecialchars($row['day']) ;   
                          $d= $row['day'];
                          echo htmlspecialchars($row['startTime']) ;   
                          $st= $row['startTime'];
                          echo htmlspecialchars($row['endTime']) ;   
                          $et= $row['endTime'];
                          
                     endwhile;

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_5', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $Result = $conn->exec($sInsert) ;
                   /*
                    if($Result )
                    {   
                        $Msg = "!Success";
                        echo $Msg;
                    }else{
                       $Msg = "ERROR: Your credentials could not be saved!";
                       echo $Msg;
                    }*/
				}
				//--------------------------------check if the user has chosen a session id 6006----------------------------------
				if(!empty($_POST["ses_6"])){

					$ses_6 = $_POST["ses_6"];
					
					//get the information about session 6001 from the Timetable table
					$sqll = "SELECT classID, facilityID, day, startTime, endTime FROM timetable WHERE t_ID = $ses_6";

					
				  	$qq = $conn->query($sqll);
                     $qq->setFetchMode(PDO::FETCH_ASSOC);

                     $cid = $fid = $d = $st =$et ="";

                     while ($row = $qq->fetch()): 
                          echo htmlspecialchars($row['classID']) ;   
                          $cid= $row['classID'];
                          echo htmlspecialchars($row['facilityID']) ;   
                          $fid= $row['facilityID'];
                          echo htmlspecialchars($row['day']) ;   
                          $d= $row['day'];
                          echo htmlspecialchars($row['startTime']) ;   
                          $st= $row['startTime'];
                          echo htmlspecialchars($row['endTime']) ;   
                          $et= $row['endTime'];
                          
                     endwhile;

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_6', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $Result = $conn->exec($sInsert) ;
                   /*
                    if($Result )
                    {   
                        $Msg = "!Success";
                        echo $Msg;
                    }else{
                       $Msg = "ERROR: Your credentials could not be saved!";
                       echo $Msg;
                    }*/
				}

				//--------------------------------check if the user has chosen a session id 6007----------------------------------
				if(!empty($_POST["ses_7"])){

					$ses_7 = $_POST["ses_7"];
					
					//get the information about session 6001 from the Timetable table
					$sqll = "SELECT classID, facilityID, day, startTime, endTime FROM timetable WHERE t_ID = $ses_7";

					
				  	$qq = $conn->query($sqll);
                     $qq->setFetchMode(PDO::FETCH_ASSOC);

                     $cid = $fid = $d = $st =$et ="";

                     while ($row = $qq->fetch()): 
                          echo htmlspecialchars($row['classID']) ;   
                          $cid= $row['classID'];
                          echo htmlspecialchars($row['facilityID']) ;   
                          $fid= $row['facilityID'];
                          echo htmlspecialchars($row['day']) ;   
                          $d= $row['day'];
                          echo htmlspecialchars($row['startTime']) ;   
                          $st= $row['startTime'];
                          echo htmlspecialchars($row['endTime']) ;   
                          $et= $row['endTime'];
                          
                     endwhile;

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_7', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $Result = $conn->exec($sInsert) ;
                   /*
                    if($Result )
                    {   
                        $Msg = "!Success";
                        echo $Msg;
                    }else{
                       $Msg = "ERROR: Your credentials could not be saved!";
                       echo $Msg;
                    }*/
				}

				//--------------------------------check if the user has chosen a session id 6008----------------------------------
				if(!empty($_POST["ses_8"])){

					$ses_8 = $_POST["ses_8"];
					
					//get the information about session 6001 from the Timetable table
					$sqll = "SELECT classID, facilityID, day, startTime, endTime FROM timetable WHERE t_ID = $ses_8";

					
				  	$qq = $conn->query($sqll);
                     $qq->setFetchMode(PDO::FETCH_ASSOC);

                     $cid = $fid = $d = $st =$et ="";

                     while ($row = $qq->fetch()): 
                          echo htmlspecialchars($row['classID']) ;   
                          $cid= $row['classID'];
                          echo htmlspecialchars($row['facilityID']) ;   
                          $fid= $row['facilityID'];
                          echo htmlspecialchars($row['day']) ;   
                          $d= $row['day'];
                          echo htmlspecialchars($row['startTime']) ;   
                          $st= $row['startTime'];
                          echo htmlspecialchars($row['endTime']) ;   
                          $et= $row['endTime'];
                          
                     endwhile;

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_8', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $Result = $conn->exec($sInsert) ;
                   /*
                    if($Result )
                    {   
                        $Msg = "!Success";
                        echo $Msg;
                    }else{
                       $Msg = "ERROR: Your credentials could not be saved!";
                       echo $Msg;
                    }*/
				}

				//--------------------------------check if the user has chosen a session id 6009----------------------------------
				if(!empty($_POST["ses_9"])){

					$ses_9 = $_POST["ses_9"];
					
					//get the information about session 6001 from the Timetable table
					$sqll = "SELECT classID, facilityID, day, startTime, endTime FROM timetable WHERE t_ID = $ses_9";

					
				  	$qq = $conn->query($sqll);
                     $qq->setFetchMode(PDO::FETCH_ASSOC);

                     $cid = $fid = $d = $st =$et ="";

                     while ($row = $qq->fetch()): 
                          echo htmlspecialchars($row['classID']) ;   
                          $cid= $row['classID'];
                          echo htmlspecialchars($row['facilityID']) ;   
                          $fid= $row['facilityID'];
                          echo htmlspecialchars($row['day']) ;   
                          $d= $row['day'];
                          echo htmlspecialchars($row['startTime']) ;   
                          $st= $row['startTime'];
                          echo htmlspecialchars($row['endTime']) ;   
                          $et= $row['endTime'];
                          
                     endwhile;

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_9', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $Result = $conn->exec($sInsert) ;
                   /*
                    if($Result )
                    {   
                        $Msg = "!Success";
                        echo $Msg;
                    }else{
                       $Msg = "ERROR: Your credentials could not be saved!";
                       echo $Msg;
                    }*/
				}

				header("Location: PaymentInfo.php");
		
	}//end else 
} catch (PDOException $e) {
    die("Could not connect to the database:" . $e->getMessage());
}

?>
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
          <td >[6004]<br>10h30-11-25<br>Barre<br>Room 2.0</td>
          <td></td>
          <td >[6005]<br>10h30-11-00<br>Strength Training<br>Room 1.6</td>
          <td></td>
          <td>[6006]<br>10h30-11-30<br>Pilates<br>Room 1.4</td>         
        </tr>
      </tbody>
       <tbody>
        <tr class="table-info">
          <td>[6007]<br>13h30-14-25<br>Barre<br>Room 1.4</td>
          <td></td>
          <td >[6008]<br>13h30-14-00<br>Strength Training<br>Room 2.0</td>
          <td></td>
          <td >[6009]<br>13h30-14-30<br>Yoga<br>Room 1.0</td>
          <td></td>
        </tr>
      </tbody>
      
    </table>
  </div>
  <br>
	<form class="form-horizontal" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">

		<div class="form-group">
	    	 	<label class="control-label col-sm-6" style="font-size:25px;" for="pwd">Which session(s) do you wish to attend?</label>
	    	 	<br><br>
	    	 	<div class="col-sm-10" name= "ses">
	    	 		<span class="error">* <?php echo $sesErr;?></span><br/>

					 <input type="radio" value="6001" id="defaultRadio" name="ses_1">
		   			 <label for="defaultRadio">6001</label>

		   			 <input type="radio" value="6002" id="defaultRadio" name="ses_2">
		   			 <label for="defaultRadio">6002</label> 

		   			 <input type="radio" value="6003" id="defaultRadio" name="ses_3">
		   			 <label for="defaultRadio">6003</label> 

		   			  <input type="radio" value="6004" id="defaultRadio" name="ses_4">
		   			 <label for="defaultRadio">6004</label>

		   			 <input type="radio" value="6005" id="defaultRadio" name="ses_5">
		   			 <label for="defaultRadio">6005</label> 

		   			 <input type="radio" value="6006" id="defaultRadio" name="ses_6">
		   			 <label for="defaultRadio">6006</label> 

		   			  <input type="radio" value="6007" id="defaultRadio" name="ses_7">
		   			 <label for="defaultRadio">6007</label>

		   			 <input type="radio" value="6008" id="defaultRadio" name="ses_8">
		   			 <label for="defaultRadio">6008</label> 

		   			 <input type="radio" value="6009" id="defaultRadio" name="ses_9">
		   			 <label for="defaultRadio">6009</label> 

		   		
	   			</div>
		</div>
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		    	<div class="col-sm-10">
		    			
		     		 <button type="submit" class="btn btn-primary">Next</button>
		  		</div>
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