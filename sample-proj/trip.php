<?php

include("connect1.php");
$person=$_POST["person"];
$source=$_POST["source"];
$destination=$_POST["destination"];
$start=$_POST["start"];
$return=$_POST["return_"];
$no_of_passengers=$_POST["no_of_passengers"];


$conn= new mysqli($host,$user,$pass,$dbname);

if(mysqli_connect_errno()){
    die("connection error:".mysqli_connect_error());
}
echo "connection succesfull \n";

$sql= "INSERT INTO flight (F_id,person,source,destination,start,return_,no_of_passengers)
VALUES(?,?,?,?,?,?,?)";

$stmt= mysqli_stmt_init($conn);
if(! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "isssssi" ,
                       $F_id,
                       $person,
                       $source,
                       $destination,
                       $start,
                       $return,
                       $no_of_passengers);
mysqli_stmt_execute($stmt);
echo "Booked Successfully";

?>