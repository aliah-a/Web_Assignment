<?php
// Start the session
session_start();
include('includes/db_connect.php');

//Make sure that the user is logged in first to be able to submit a Feedback
if(!isset($_SESSION['email'])){
  header("Location: Home.php?referer=Feedback");
}
try{
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
//-------------------------------------------------------
   $sql = "SELECT day, sessionID, className, start_Time, end_Time, facilityName FROM session S, class C , facility F WHERE C.classID = S.classID AND F.facilityID = S.facilityID AND userID ='$uid' AND ISNULL(reviewed)" ;

    $stmt = $conn ->prepare($sql);
    $stmt ->execute();
    $resulttt = $stmt ->fetchAll();


    $nameErr = $genderErr = $comment = $sessionRatingErr =$sessErr= "";
  $name = $gender = $sessionRating = $sess ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //check if the page is being invoked after register form data has been submitted
    //-------------VALIDATE NAME-----------------
    if(empty($_POST["txt_name"])){
      //check if the field is empty
      $nameErr = "name is required.";
    }else{
      $name = ($_POST["txt_name"]);
      //call the test_input function on $_POST["txt_name"]
      if(!preg_match("/^[a-zA-Z ]*$/", $name)){
        //use a regular expression to validate the name field
        $nameErr = "Only letters and white spaces allowed.";
      }//end if
    }//end else
    //----------------VALIDATE GENDER--------------------------
    if (empty($_POST["txt_gender"])) {
        $genderErr = "Gender is required";
    } 
    else {
        $gender = ($_POST["txt_gender"]);
    }
    //------------------VALIDATE COMMENT----------------------
    if (empty($_POST["txt_comment"])) {
    $comment = "";
    } else {
      $comment = ($_POST["txt_comment"]);
    }
    //-------------------VALIDATE SESSION RATING-----------------
      if (empty($_POST["session_rating"])) {
        $sessionRatingErr= "A proper rating is required";
      } else {
        $sessionRating = ($_POST["session_rating"]);
      }
      //-----------------VALIDATE SESSION ----------------------------
      if (empty($_POST["txt_sess"])) {
        $sessErr= "A proper rating is required";
      } else {
        $sess = ($_POST["txt_sess"]);
      }
      //-------------------------IF THERE ARE NO ERRORS--------------------

      //split str according to |
      echo $sess;
      list($sid, $d, $cn , $st, $et , $fn) = array_pad(explode( "|", $sess),6,null);
      echo $sid;
      echo $uid;
        //------------------------------------------------------------------

      if($nameErr == "" && $genderErr == ""){
         
          $currentDate = "" ;
          date_default_timezone_set("Asia/Yerevan");
          $currentDate = date("Y/m/d");
          //echo $currentDate;

          require_once "includes/db_connect.php";

          $sInsert = "INSERT INTO review (userID,  sessionID, rating, comment, ReviewDate, name, gender) VALUES('$uid', '$sid','$sessionRating', '$comment','$currentDate', '$name', '$gender')";
          //echo $sInsert;

          //set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $conn->beginTransaction() ; 
          $addResult = $conn->exec($sInsert) ;
     

          if($addResult )
          { 
            $Msg = "!Success";
            echo $Msg;
          }else{
             $Msg = "ERROR: Record could not be saved!";
             $conn->rollBack();
             echo $Msg;
             die();
          }//end else

          $sUpdate = "UPDATE session SET reviewed = '1' WHERE userID = '$uid' AND sessionID = '$sid' ";

          $updateResult = $conn->exec($sUpdate) ;
          if($updateResult)
          {
            $Msg = "Record Updated!";
            echo $Msg;
          }else{
             $Msg = "ERROR: Record could not be updated!";
             $conn->rollBack();         
             echo $Msg;
             die();
          }//end else ($updateResult)
          
          $conn->commit();  
          $conn==null;    
      }  
      header("Location:Home.php") ;
    }
  }catch (PDOException $e) {
    die("Could not connect to the database:" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback</title>
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
   fieldset {
      background-color: #eeeeee;
    }
  legend {
      background-color: gray;
      color: white;
      padding: 5px 10px;
  }
 </style>
</head>
<body>
 
	<br><br><br><br>
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
        <a class="nav-link active" href="Feedback.php">Feedback</a>
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
  <h2>What do you think about Planet Fitness?</h2> 
  <p> Let us know!</p>
</div>
<br>
<form class="form-horizontal"  method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">

<fieldset>
    <legend>Personal Details</legend>
  <div class="form-group ">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $name; ?>" name="txt_name" id="name" placeholder="Enter name">
      <span class="error" style="color: red;">* <?php echo $nameErr;?></span><br/>
    </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-10" for="gender">Gender:</label>

      <div class="col-sm-10">
          <input type="radio" value="male" id="defaultRadio" name="txt_gender">
          <label for="defaultRadio">Male</label>

          <input type="radio" value="female" id="defaultRadio" name="txt_gender">
          <label for="defaultRadio">Female</label> 

          <input type="radio" value="other" id="defaultRadio" name="txt_gender">
          <label for="defaultRadio">Other</label> 

          <span class="error" style="color: red;">* <?php echo $genderErr;?></span><br/>
      </div>
  </div>
</fieldset>  
<fieldset>
    <legend>Group Classes Details</legend>
    <br>
    <div class="form-group">
        <label class="control-label col-sm-10" for="sess"> Choose the session you want to rate: (We are showing sessions as day | session_id | class Name | Start Time | End Time | Facility Name)</label><br>
        <div class="col-sm-10">
            <select name="txt_sess" id="sess">
              <option value="">--Select Session--</option>   
              <?php
               foreach ($resulttt as $output){
                   $str = "";
                $str = $str. $output['sessionID'] . " | ";
                $str = $str. $output['day']. " | ";
                $str = $str. $output['className']. " | ";
                $str = $str. $output['start_Time']. " | ";
                $str = $str. $output['end_Time']. " | ";
                $str = $str. $output['facilityName'];
                echo "<option value ='$str'> $str </option>";
                }     
              ?>
            </select>
            <span class="error" style="color: red;">* <?php echo $sessErr;?></span><br><br>
    </div>
    <div class="form-group ">
      <label class="control-label col-sm-10" for="sessionRating">Please specify your appreciation of the group classes you have attended:</label>
      <div class="col-sm-10">
          <select name="session_rating" >
             <option value= "" selected >Please select a value</option>
             <option value= "1" <?php if($sessionRating == "1") {echo "selected";} ?> >1</option>
             <option value= "2" <?php if($sessionRating == "2") {echo "selected";} ?>>2</option>
             <option value= "3" <?php if($sessionRating == "3") {echo "selected";} ?>>3</option>
             <option value= "4" <?php if($sessionRating == "4") {echo "selected";} ?>>4</option>
             <option value= "5" <?php if($sessionRating == "5") {echo "selected";} ?>>5</option>
          </select>
          <span class="error" style="color: red;">* <?php echo $sessionRatingErr;?></span><br/>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-10" for="comment">Comment:</label>
        <div class="col-sm-10">
           <textarea  rows="10" cols="130" value="<?php echo $comment; ?>" name="txt_comment"><?php echo $comment;?></textarea><br/><br/>

        </div>
    </div>
</fieldset>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

</form>
<div class="jumbotron text-center bg-dark">
  <p>Footer</p>
</div>
</body>
</html>

