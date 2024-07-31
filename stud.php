<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: index.php');
    exit;
}

$servername = "localhost";
$username = "romanohe_kollege";
$password = "Qwerty123";
$dbname = "romanohe_kollege"; 

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем подключение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получаем пользователей 
$sql_exams = "SELECT *, s.name, t.surname, st.surname FROM exams e join subjects s on s.id_subjects=e.id_subjects join teachers t on t.id_teachers=e.id_teachers join students st on st.id_students=e.id_students";

$result_exams= $conn->query($sql_exams);


// Получаем записи

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Страница cтудента</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Последние скомпилированные и минифицированные CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Библиотека jquery -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Последние скомпилированные и минифицированные javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Внешний CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div>
        
        <br>
        <div class="container">
            <h1>Добро пожаловать, Студент</h1>
            <a href="index.php" class="btn btn-primary">Перейти на главный сайт</a>
            
            <h2>Сессия</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Код дисциплины</th>
                        <th>Код преподавателя</th>
                        <th>Код студента</th>
                        <th>Дата </th>
                        <th>Отметка</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result_exams->num_rows > 0) {
                        while($row = $result_exams->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["surname"]."</td><td>".$row["surname"]."</td><td>".$row["date"]."</td><td>".$row["mark"]."</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Нет зарегистрированных пользователей</td></tr>";
                    }
                    ?>
                </tbody>
            </table>


            <!-- <h2>Добавить услугу</h2>
            <form action="add_service.php" method="POST" class="form-inline">
                <div class="form-group">
                    <label for="name">Название услуги:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="price">Цена:</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Добавить услугу</button>
            </form>

            <h2>Записи на услуги</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя пользователя</th>
                        <th>Название услуги</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table> -->
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
