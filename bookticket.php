<?php
session_start();

$email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket booking</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="styl.css">
</head>
<body background="bg.jpg" style="background-repeat:no-repeat;background-size:100%" >
    <div class="containe">
        <h1>Book your Ticket</h1>
        <p><i>Your Email=<?php echo $email?></i></p>
        <p><b>Provide Train ID to get your ticket
            booked</b></p>
            </div>
            <div class="contain">
           <form action="booking.php"method="post"> 
            <input type="number" name="trainid" id="trainid" placeholder="
            Enter your trainid">
            
            <button class="btn">Submit</button>
           
            
           </form> 
    </div>
    
    
</body>
</html>
