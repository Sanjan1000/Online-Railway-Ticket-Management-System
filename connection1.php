<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "train ticket";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	exit("failed to connect!");
}
