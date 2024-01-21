<?php
$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="train ticket";
if(!$con = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname))
{

	die("failed to connect!");
}
