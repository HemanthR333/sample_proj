<?php

$host="localhost";
$dbname="booking_system";
$user="root";
$pass="";

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$terms=$_POST["terms"];


$conn= new mysqli($host,$user,$pass,$dbname);

if(mysqli_connect_errno()){
    die("connection error:".mysqli_connect_error());
}
//echo "connection succesfull \n";

if(strlen($password)<8){
    die('<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">password must be above 8 charcters</h4>
    
  </div>');
}

if(! $terms){
    die("terms must be accepted");
}

$sql= "INSERT INTO registration (customer_id,username,email,password)
VALUES(?,?,?,?)";

$stmt= mysqli_stmt_init($conn);
if(! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "isss" ,
                       $customer_id,
                       $username,
                       $email,
                       $password);
mysqli_stmt_execute($stmt);
echo "Record Saved";

?>