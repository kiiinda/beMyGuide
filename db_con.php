<?php
$host ="localhost";
$user ="root";
$pass ="";
$db_name ="bemyguide";


$con = mysqli_connect($host, $user, $pass, $db_name);
//check if connection failed
if(!isset($con)){
    die("DB Connection Failed!!!");
}