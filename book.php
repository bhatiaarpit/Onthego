<?php
$placename =$_POST['placename'];

$numberofguests =$_POST['numberofguests'];

$arrivaldate =$_POST['arrivaldate'];

$leavingdate =$_POST['leavingdate'];


$host = "localhost";
$dbname = "onthego";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,username: $username,password: $password,database: $dbname);
if (mysqli_connect_errno()){
    die("Connection error: ". mysqli_connect_error());
}


$sql = "INSERT INTO bookingdetails (placename, numberofguests, arrivaldate, leavingdate)
VALUES(?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
    # code...
}

mysqli_stmt_bind_param($stmt, "siii", $placename, $numberofguests, $arrivaldate, $leavingdate);

mysqli_stmt_execute($stmt);
?>