<?php

$host="localhost";
$dbname="booking_system";
$user="root";
$pass="";

$conn= new mysqli($host,$user,$pass,$dbname);

if(mysqli_connect_errno()){
    die("connection error:".mysqli_connect_error());
}
?>