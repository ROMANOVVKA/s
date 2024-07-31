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
    $id_teacher = $_POST["id_teachers"];
    $name = $_POST["name"];
    $secondname = $_POST["secondname"];
    $surname = $_POST["surname"];
    $bday = $_POST["bday"];

    // Подготавливаем SQL-запрос
    $stmt = $con->prepare("UPDATE teachers SET name = ?, secondname = ?, surname = ?, bday = ? WHERE id_teachers = ?");
    $stmt->bind_param("ssssi", $name, $secondname, $surname, $bday, $id_teacher);

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
