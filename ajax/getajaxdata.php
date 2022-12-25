<?php
$servername = "localhost";

$username = "root";

$password = "";

$db_name = "ajax";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
} else {
    //    echo "connected";
}

$array = array();

$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row);
    }
}

header('Content-type: application/json');
echo json_encode($array);
