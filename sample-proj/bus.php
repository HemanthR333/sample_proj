<?php

include("connect1.php");

$trip=$_POST["trip"];
$source=$_POST["source"];
$destination=$_POST["destination"];
$depart=$_POST["departure"];
$return=$_POST["return_"];
$no_of_passengers=$_POST["passenger"];
$time=$_POST["time"];
$person=$_POST["person"];



$sql= "INSERT INTO bus (bus_id,source,destination,departure,return_,no_of_passengers,time_,trip_mode,person)
VALUES(?,?,?,?,?,?,?,?,?)";

$stmt= mysqli_stmt_init($conn);
if(! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "issssisss" ,
                       $bus_id,
                       $source,
                       $destination,
                       $depart,
                       $return,
                       $no_of_passengers,
                       $time,
                       $trip,
                       $person);
mysqli_stmt_execute($stmt);


echo "Ticket book successfully <br><br>";
echo "Your ticket details are: <br><br>";

echo "Source | Destination | Departure | Return | Passengers | Time | <br>";

echo $source;
echo "\t|\t";
echo $destination;
echo "\t|\t";
echo $depart;
echo "\t|\t";
echo $return;
echo "\t|\t";
echo $no_of_passengers;
echo "\t|\t";
echo $time;
echo "\t|\t";

?>