<?php
$sname = "localhost";

$unmae = "root";

$password = "";

$db_name = "ajax";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";
}
// /* SQL query to get results from database */

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student WHERE user_name='$user_name'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) >= 1) {

        header('Content-type: application/json');
        echo json_encode('user already registered');
    } else {
        $query = "INSERT INTO `student`(`user_name`, `name`, `email`, `phone`, `password`) VALUES ('$user_name','$name','$email','$phone','$password')";

        $result = mysqli_query($conn, $query);

        header('Content-type: application/json');
        echo json_encode('Data inserted successfully');
        //     }

        // }

    }
    $conn->close();
}
