<?php
    require_once 'setting.html';
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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST['username']; // Изменено с 'login' на 'username'
        $password = $_POST['password'];// Изменено с 'password' на 'pass'

        // Проверка существует ли пользователь с таким логином
        $checkQuery = "SELECT * FROM authorization WHERE name = ?";


        $checkStmt = $conn->prepare($checkQuery);
        if ($checkStmt === false) {
            die('Ошибка подготовки запроса: ' . $conn->error);
        }
        $checkStmt->bind_param("s", $login);
        

        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult->num_rows > 0) {
            echo 'Пользователь с таким логином уже существует';
        } else {
            $query = "INSERT INTO authorization (name, pswd) VALUES (?, ?)";
            // $stmt = $conn->prepare($checkQuery);
            // $stmt->bind_param("ss", $login, $pass);
            // $stmt->execute();

            // if ($stmt->affected_rows === 0) {
            //     exit('Ошибка регистрации: ' . $stmt->error);
            // } else {
                $_SESSION['username'] = $login; // Сохраняем логин пользователя в сессии
               header('Location: index.php'); // Перенаправляем пользователя на страницу 
                exit;
            // }
        }
    }
?>