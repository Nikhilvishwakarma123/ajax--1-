<?php
/*
* Write your logic to manage the data
* like storing data in database
*/
$servername = "localhost";
$username = "root";
$password = "";
$database = "ajax";

$mysqli = new mysqli("$servername", "$username", "$password");
$mysqli->select_db("ajax");

if ($mysqli) {
    echo "successfully";
}

// POST Data

$fname = $_POST['firstName'];
$lname =  $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];

$mysqli->query("INSERT INTO `tbl`(`FirstName`, `LastName`, `email`, `massage`) VALUES ('$fname','$lname','$email','$message')");

if ($mysqli) {
    header('Content-Type:application/json');
    echo json_encode("Data Inserted successfully");
}
exit;
