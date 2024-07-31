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

    $stmt = $con->prepare("DELETE FROM subjects WHERE id_subjects = ?");
    $stmt->bind_param("i", $id_subjects);

    if ($stmt->execute()) {
        echo "Предмет удален успешно";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    $stmt->close();
    $con->close();

    header("Location: admin.php"); // Переадресация на главную страницу после выполнения
    exit();
}
?>
