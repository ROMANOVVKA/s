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
    $id_subjects = $_POST["id_subjects"];
    $name = $_POST["name"];

    $stmt = $con->prepare("UPDATE subjects SET name = ? WHERE id_subjects = ?");
    $stmt->bind_param("si", $name, $id_subjects);

    if ($stmt->execute()) {
        header("Location: admin.php");
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    $stmt->close();
    $con->close();

    header("Location: admin.php"); // Переадресация на главную страницу после выполнения
    exit();
}
?>
