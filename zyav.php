<?php
// Подключение к базе данных
$servername = "localhost";
$username = "romanohe_kollege";
$password = "Qwerty123";
$dbname = "romanohe_kollege"; // Имя вашей базы данных

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

// Подготовка и выполнение SQL запроса для вставки данных в таблицу
$sql = "INSERT INTO contact (first_name, last_name, email, phone, comments) VALUES ('$first_name', '$last_name', '$email', '$phone', '$comments')";

if ($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">alert("Заявка успешно отправлена"); window.location.href = "index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
