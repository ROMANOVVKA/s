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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_teachers"])) {
    $id_teachers = $_POST["id_teachers"];

    // Подготавливаем SQL-запрос
    $stmt = $con->prepare("DELETE FROM teachers WHERE id_teachers = ?");
    $stmt->bind_param("i", $id_teachers);

    // Выполняем запрос
    if ($stmt->execute()) {
        echo "Запись удалена успешно";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    // Закрываем запрос и соединение
    $stmt->close();
    $con->close();

    // Переадресация на главную страницу после выполнения
    header("Location: admin.php");
    exit();
} else {
    echo "Ошибка: некорректный запрос";
}
?>
