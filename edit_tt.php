<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$servername = "localhost";
$username = "romanohe_kollege";
$password = "Qwerty123";
$dbname = "romanohe_kollege"; 


// Создаем подключение
$con = new mysqli($servername, $username, $password, $dbname);

// Проверяем подключение
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_tt = $_POST["id_tt"];
    $id_groups1 = $_POST["id_groups1"];
    $id_teachers = $_POST["id_teachers"];
    $id_subjects = $_POST["id_subjects"];
    $kabinet = $_POST["kabinet"];
    $day = $_POST["day"];
    $para = $_POST["para"];

    // Подготавливаем SQL-запрос
    $stmt = $con->prepare("UPDATE timetable SET id_groups1 = ?, id_teachers = ?, id_subjects = ?, kabinet = ?, day=?, para=? WHERE id_tt = ?");
    $stmt->bind_param("iiisssi", $id_groups1, $id_teachers, $id_subjects, $kabinet,$day,$para,  $id_tt);

    // Выполняем запрос
    if ($stmt->execute()) {
        // Success message or redirect
        header("Location: admin.php?success=1");
        exit();
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    // Закрываем запрос и соединение
    $stmt->close();
    $con->close();
} else {
    // Закрываем соединение, если не POST запрос
    $con->close();
}
?>
