<?php


include("connect1.php");

$trip=$_POST["trip"];
$destination=$_POST["destination"];
$depart=$_POST["departure"];
$return=$_POST["return_"];
$no_of_rooms=$_POST["rooms"];


$conn= new mysqli($host,$user,$pass,$dbname);

$sql= "INSERT INTO hotel (hotel_id,destination,departure,return_,no_of_rooms,trip_mode)
VALUES(?,?,?,?,?,?)";

$stmt= mysqli_stmt_init($conn);
if(! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "isssis" ,
                       $hotel_id,
                       $destination,
                       $depart,
                       $return,
                       $no_of_rooms,
                       $trip);
mysqli_stmt_execute($stmt);
echo "Ticket book successfully <br><br>";
echo "Your ticket details are: <br><br>";

echo "| Destination | Departure | Return | Rooms | <br>";

echo "\t|\t";
echo $destination;
echo "\t|\t";
echo $depart;
echo "\t|\t";
echo $return;
echo "\t|\t";
echo $no_of_rooms;
echo "\t|\t";



?>