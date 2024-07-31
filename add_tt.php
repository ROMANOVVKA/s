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
    $id_groups1 = $_POST['id_groups1'];
    $id_teachers = $_POST['id_teachers'];
    $id_subjects = $_POST['id_subjects'];
    $kabinet = $_POST['kabinet'];
    $day = $_POST['day'];
    $para = $_POST['para'];

    $sql = "INSERT INTO timetable (id_groups1, id_teachers, id_subjects, kabinet,day, para) VALUES (?, ?, ?, ?,?,?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("iiiss", $id_groups1, $id_teachers, $id_subjects, $kabinet,$day, $para);

    if ($stmt->execute()) {
        header("Location: admin.php"); // Redirect to the main page after adding
    } else {
        echo "Ошибка: " . $sql . "<br>" . $con->error;
    }

    $stmt->close();
    $con->close();
}
?>
