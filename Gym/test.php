<?php
/*
session_start();
require_once 'includes/db_connect.php';
/*
try {

    //Get the userID of the last user who registered
    $sql = 'SELECT userID FROM user ORDER BY userID DESC LIMIT 1';

    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

    $uid="";
    while ($row = $q->fetch()): 
          echo htmlspecialchars($row['userID']) ;   
          $uid= $row['userID'];
    endwhile;
    echo "/t";
    echo $uid;

    $ses_1 = "6001";



                //check if the user has chosen a session or not
                
                    //GET THE INFO ABOUT THE SESSION 6001
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


                     echo $uid;
                     echo $ses_1;
                     echo $cid;
                     echo $fid;
                     echo $d;
                     echo $st;
                     echo $et;
                     require_once 'includes/db_connect.php';

                    $sInsert = "INSERT INTO session (sessionID, userID, classID, facilityID, day, start_Time, end_Time) VALUES('$ses_1', '$uid', '$cid', '$fid', '$d', '$st', '$et')";
                
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
    



   
 
} catch (PDOException $e) {
    die("Could not connect to the database:" . $e->getMessage());
}*/
/*date_default_timezone_set("Asia/Yerevan");

echo "Today is " . date("d/m/Y") . "<br>";
echo "The time is " . date("h:i:sa");*/

    //---------------------------------------------------------------
//we get the user of the current session
  /*   $sessEmail = "";
     $sessEmail = $_SESSION['email'];
     echo $sessEmail;

     $sqll = "SELECT userID FROM user WHERE email = '$sessEmail' " ;
     $ql = $conn->query($sqll);
     $ql->setFetchMode(PDO::FETCH_ASSOC);

    $uid="";
    while ($row = $ql->fetch()): 
          //echo htmlspecialchars($row['userID']) ;   
          $uid= $row['userID'];
    endwhile;
    //echo $uid;
 
  
    //echo $count;

//-------------------------------------------------------
    $sql = "SELECT day, sessionID, className, start_Time, end_Time, facilityName FROM session S, class C , facility F WHERE C.classID = S.classID AND F.facilityID = S.facilityID AND userID ='$uid' " ;

    $stmt = $conn ->prepare($sql);
    $stmt ->execute();
    $resulttt = $stmt ->fetchAll();


?>
<html>
    <body>

            <br>
            <label for="cars">Choose a session:</label>

            <select name="cars" id="cars">
              <option>--Select Session--</option>    
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
  





    </body>
</html>
*/

session_start();
require_once 'includes/db_connect.php';

try {
  

    $sql = 'SELECT name,
                    gender,
                    doB
               FROM user
              ORDER BY name';

    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query Data Demo</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <h1>Members</h1>
  
            <table>
    <tbody>
         <?php while ($row = $q->fetch()): ?>
        <tr>
            <th scope="row">Name</th>
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
      <?php endwhile; ?>
    </tbody>
</table>
</div>
    </body>
</div>
</html>
