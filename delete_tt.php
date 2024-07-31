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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_tt"])) {
    $id_tt = $_POST["id_tt"];

    // Подготавливаем SQL-запрос
    $stmt = $con->prepare("DELETE FROM timetable WHERE id_tt = ?");
    $stmt->bind_param("i", $id_tt);

    // Выполняем запрос
    if ($stmt->execute()) {
         header("Location: admin.php");
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    // Закрываем запрос и соединение
    $stmt->close();
    $con->close();

    // Переадресация на главную страницу после выполнения
   
    exit();
} else {
    echo "Ошибка: некорректный запрос";
}
?>
