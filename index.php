<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $email=$_POST['email'];
    $goal = $_POST['goal'];
    $sql = "INSERT INTO `gym`.`gym` (`name`, `age`, `mobile`,`email`,`goal`) VALUES ('$name','$age','$mobile','$email','$goal')";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to GYM Club</title>
    <link href="css/des.css" rel="stylesheet">
    
   

   </head>
  <body>
    
      
    <div >
      <img src="background-image/gym.jpg" alt="image" class="im">
    <nav>
    <b><a href="" >Home |</a> 
      <a href="" >Contact us |</a> 
      <a href="">About</a></b>
    </nav>
    
    <h1>The Gym Club</h1>
    <h2>Membership Registration Form</h2>
    <?php
        if($insert == true){
        echo "<p>Successfully Registered</p>";
        }
    ?>

    <form action="index.php" method="post">          


    <b>Enter name - <input type="text" placeholder="Name " id="name" name="name"><br>
    Enter age - <input type="number" placeholder="Age " id="age" name="age"><br>
    Enter mobile number - <input type="phone" id="mobile" placeholder="Mobile number " name="mobile"><br>
    <!--Type of member ship - <input type="radio" name="membership"class="mem">PLATINUM
    <input type="radio" name="membership"class="mem">GOLD
    <input type="radio" name="membership"class="mem">SILVER<br>-->
    Enter email - <input type="email" placeholder="Email" id="email" name="email"><br>
    Enter goal - <textarea placeholder="What you want to achieve" id="goal" rows="4" cols="20" name="goal"></textarea><br></b>
    <button  id="btn" >Submit</button>
    </form>
</div>

    
   </body>
</html>    













































