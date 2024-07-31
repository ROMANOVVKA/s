<?php
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
    $id_students = $_POST["id_students"];

    $stmt = $con->prepare("DELETE FROM students WHERE id_students = ?");
    $stmt->bind_param("i", $id_students);

    if ($stmt->execute()) {
        echo "Запись удалена успешно";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    $stmt->close();
    $con->close();

    header("Location: admin.php"); // Переадресация на главную страницу после выполнения
    exit();
}
?>
