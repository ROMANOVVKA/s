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
}// Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $secondname = $_POST['secondname'];
    $surname = $_POST['surname'];
    $bday = $_POST['bday'];


    $sql = "INSERT INTO teachers (name, secondname, surname, bday) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssss", $name, $secondname, $surname, $bday);

    if ($stmt->execute()) {
        header("Location: admin.php"); // Redirect to the main page after adding
    } else {
        echo "Ошибка: " . $sql . "<br>" . $con->error;
    }

    $stmt->close();
    $con->close();
}
?>










