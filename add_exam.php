<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: index.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
$username = "romanohe_kollege";
$password = "Qwerty123";
$dbname = "romanohe_kollege"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO exams (id_subjects, id_teachers, id_students, date, mark) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iiisi", $subject, $teacher, $student, $date, $mark);

    // Set parameters and execute
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $student = $_POST['student'];
    $date = $_POST['date'];
    $mark = $_POST['mark'];

    if ($stmt->execute()) {
        header("Location: teach.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>