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
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $student = $_POST['student'];
    $date = $_POST['date'];
    $mark = $_POST['mark'];

    $sql = "UPDATE exams SET subject='$subject', teacher='$teacher', student='$student', date='$date', mark='$mark' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Exam updated successfully";
    } else {
        echo "Error updating exam: " . $conn->error;
    }

    $conn->close();
}
?>
