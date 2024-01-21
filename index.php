<?php
session_start();
if(isset($_POST['name'])){
  $server="localhost";
  $username="root";
  $password="";
  $con=mysqli_connect($server,$username,$password) ;
  if(!$con){
    die("connection could not established".
    mysqli_connect_error());
  }
  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $_SESSION['email']=$email;
  $sql= "INSERT INTO `train ticket`.`passenger` (`name`, `number`, `email`, `date`) VALUES ('$name', '$number', '$email', current_timestamp());";
  
  if($con->query($sql)==TRUE){
    header("Location:bookticket.php");
  }
  else{
    echo "Error:$sql <br> $con->error";
  }
  $con->close();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Bangladesh Railway station</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
</head>
<body background="bg.jpg" style="background-repeat:no-repeat;background-size:100% 100%" >
    <div class="container"> 
    <font color="white">  
    <center>    
      <h1>Welcome to Bangladesh Railway Station </h1>
      </font>
        <h3>Enter your details to book your ticket</h3>
        <form action="index.php" method="post">
          
        <p>Train Information Here</p>
        <button class="btn"><a href="pview.php">Train Information</a></button>
        
        </center>
        </div>

        <center>
        <div class="contains">
            <input type="text" name="name" id="name" placeholder="
            Enter your name">
            <input type="text" name="number" id="number" placeholder="
            Enter your Phone number">
            <input type="text" name="email" id="email" placeholder="
            Enter your Email">
            <br>
            <button class="btn"> Submit </button>
             <br>
             <br>
            <b><label><font color="White" size="6">
            If you are an admin then click down below</font></label></b>
          
            <br>
            <button class="btn"><a href="login.php">Admin Section</a></button>
            
        </form>
        </div>
</center>
    
    <script src="index.js"></script>
</body>

</html>
