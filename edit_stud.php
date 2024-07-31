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
    $name = $_POST["name"];
    $secondname = $_POST["secondname"];
    $surname = $_POST["surname"];
    $bday = $_POST["bday"];
    $id_groups1 = $_POST["id_groups1"];

    $stmt = $con->prepare("UPDATE students SET name = ?, secondname = ?, surname = ?, bday = ?, id_groups1 = ? WHERE id_students = ?");
    $stmt->bind_param("ssssii", $name, $secondname, $surname, $bday, $id_groups1, $id_students);

    if ($stmt->execute()) {
        echo "Запись обновлена успешно";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    $stmt->close();
    $con->close();

    header("Location: admin.php"); // Переадресация на главную страницу после выполнения
    exit();
}
?>
