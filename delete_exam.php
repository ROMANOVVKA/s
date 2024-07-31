<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: index.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
$username = "romanohe_kollege";
$password = "Qwerty123";
$dbname = "romanohe_kollege"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST['id'];

    $sql = "DELETE FROM exams WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: teach.php");
    } else {
        echo "Error deleting exam: " . $conn->error;
    }

    $conn->close();
}
?>
