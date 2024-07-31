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
    $id_groups1 = $_POST['id_groups1'];


    $sql = "INSERT INTO students (name, secondname, surname, bday, id_groups1) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssi", $name, $secondname, $surname, $bday, $id_groups1);

    if ($stmt->execute()) {
        header("Location: admin.php"); // Redirect to the main page after adding
    } else {
        echo "Ошибка: " . $sql . "<br>" . $con->error;
    }

    $stmt->close();
    $con->close();
}
?>
