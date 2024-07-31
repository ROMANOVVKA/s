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
    $name = $_POST["name"];

    $stmt = $con->prepare("INSERT INTO subjects (name) VALUES (?)");
    $stmt->bind_param("s", $name);

    if ($stmt->execute()) {
        echo "Предмет добавлен успешно";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    $stmt->close();
    $con->close();

    header("Location: admin.php"); // Переадресация на главную страницу после выполнения
    exit();
}
?>
