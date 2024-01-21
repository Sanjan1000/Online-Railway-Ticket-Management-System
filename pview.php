<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Information</title>
    <link rel='stylesheet' href='common.css'>
</head>
<body background="zbg.jpg" style="background-repeat:no-repeat;background-size:100% ">
<div class="heading">
        <center><h1>Train Information</h1></center>
    </div>   
    <br>
    <div class="pages">
    </div>
    <br>
    <hr size="3" width="100%" align="center" color="black">

         
</body>
<style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        color: #E4E400;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }
    th {
        background-color: #588c7e;
        color: white;
    }
    tr: nth-child(even) {background-color: #d96459}
    form{padding-top: 10px;
        text-align: left;
        font-size:20px;}
    input{width: 250px;
        height:30px;
        font-size: 20px;}    
    
</style>    
<table>
        <tr>
            <th>train_id</th>
            <th>name</th>
            <th>seat_availability</th>
            <th>schedule</th>
            <th>route</th>
            
    </tr>





    <?php
    $search_query = "SELECT * from train";
        function executeQuery($search_query)
        {
    
    
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "train ticket";
            $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if ($conn-> connect_error){
            die("Connection failed:". $conn-> connect_error);
        }

        $result = $conn-> query($search_query);
        return $result;
            }


        
        $result =executeQuery($search_query);
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td>". $row['train_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['seat_availability'] . "</td><td>" . $row['schedule'] . "</td><td>" . $row['route'] ."</tr></td>"; 
        }
            echo "</table>";
        
    
    
    
    ?>
    <br>
    <br>
    <center>
    <a href="index.php">Go Back</a>
    </center>
</table>
</html>