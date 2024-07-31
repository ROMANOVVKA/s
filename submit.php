<?php
// Подключение к базе данных
$servername = "localhost";
$username = "romanohe_kollege";
$password = "Qwerty123";
$dbname = "romanohe_kollege"; 
// Создание соединения
$conn = new mysqli($servername, $username, $pass, $dbname);

// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Получение данных из отправленной формы
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

// Выполнение запроса на добавление данных в базу данных
$sql = "INSERT INTO submit (first_name, last_name, email, phone, comments) VALUES ('$first_name', '$last_name', '$email', '$phone', '$comments')";

if ($conn->query($sql) === TRUE) {
  // Если данные успешно добавлены в базу данных, можно вызвать функцию JavaScript для отображения окна об успешной отправке
  echo '<script>showSuccessMessage();</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
?>
