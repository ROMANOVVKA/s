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
$query = "SELECT students.id_students, students.name, students.secondname, students.surname, students.bday, groups1.name AS group_name FROM students JOIN groups1 ON students.id_groups1 = groups1.id_groups1";
// Получаем пользователей
$sql_users = "SELECT * FROM students";
$result_users = $conn->query($sql_users);

$subjects_result = $conn->query("SELECT id_subjects, name FROM subjects");
$subjects = [];
while ($row = $subjects_result->fetch_assoc()) {
    $subjects[] = $row;
}

// Get teachers for dropdown
$teachers_result = $conn->query("SELECT id_teachers, surname FROM teachers");
$teachers = [];
while ($row = $teachers_result->fetch_assoc()) {
    $teachers[] = $row;
}


$sql_groups1= "SELECT * FROM groups1";
$result_groups1 = $conn->query($sql_groups1);

// Получаем записи

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Страница администратора</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Последние скомпилированные и минифицированные CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Библиотека jquery -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Последние скомпилированные и минифицированные javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<style>
        /* Modal Styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            padding-top: 100px; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
        }
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }
    </style>
    <div>
        
        <br>
        <div class="container">
            <h1>Добро пожаловать, Администратор</h1>
            <a href="index.php" class="btn btn-primary">Перейти на главный сайт</a>
            </br></br>
            <button onclick="openAddUserModal()" class="btn btn-success">Добавить студента</button></br></br>
            
            <h2>Студенты</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Фамилия</th>
                        <th>Дата рождения</th>
                        <th>код группы</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
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
            
                    $result_users = $con->query("SELECT students.id_students, students.name as name_stud, students.secondname, students.surname, students.bday, groups1.name as group_name, students.id_groups1 FROM students JOIN groups1 ON students.id_groups1 = groups1.id_groups1");
                    if ($result_users->num_rows > 0) {
                        while($row = $result_users->fetch_assoc()) {
                            echo "<tr>
                                    <td>".$row["id_students"]."</td>
                                    <td>".$row["name_stud"]."</td>
                                    <td>".$row["secondname"]."</td>
                                    <td>".$row["surname"]."</td>
                                    <td>".$row["bday"]."</td>
                                    <td>".$row["group_name"]."</td>
                                    <td>
                                        <button onclick='openEditUserModal(".$row["id_students"].", \"".$row["name_stud"]."\", \"".$row["secondname"]."\", \"".$row["surname"]."\", \"".$row["bday"]."\", ".$row["id_groups1"].")' class='btn btn-primary'>Изменить</button>
                                        <button onclick='openDeleteUserModal(".$row["id_students"].")' class='btn btn-danger'>Удалить</button>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Нет зарегистрированных пользователей</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            
            <div id="addUserModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeAddUserModal()">&times;</span>
                    <h2>Добавить пользователя</h2>
                    <form id="addUserForm" method="post" action="add_stud.php">
                        <div class="form-group">
                            <label for="name">Имя:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="secondname">Отчество:</label>
                            <input type="text" id="secondname" name="secondname" required>
                        </div>
                        <div class="form-group">
                            <label for="surname">Фамилия:</label>
                            <input type="text" id="surname" name="surname" required>
                        </div>
                        <div class="form-group">
                            <label for="bday">Дата:</label>
                            <input type="date" id="bday" name="bday" required>
                        </div>
                        <div class="form-group">
                            <label for="id_groups1">Группа:</label>
                            <select id="id_groups1" name="id_groups1" required>
                                <?php
                                $result_grypa = $con->query("SELECT id_groups1, name FROM groups1");
                                while ($grypa = $result_grypa->fetch_assoc()) {
                                    echo "<option value='".$grypa['id_groups1']."'>".$grypa['name']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                </div>
            </div>
            
            <!-- Edit User Modal -->
            <div id="editUserModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeEditUserModal()">&times;</span>
                    <h2>Изменить пользователя</h2>
                    <form id="editUserForm" method="post" action="edit_stud.php">
                        <input type="hidden" id="edit_id_students" name="id_students">
                        <div class="form-group">
                            <label for="edit_name">Имя:</label>
                            <input type="text" id="edit_name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_secondname">Отчество:</label>
                            <input type="text" id="edit_secondname" name="secondname" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_surname">Фамилия:</label>
                            <input type="text" id="edit_surname" name="surname" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_bday">Дата:</label>
                            <input type="date" id="edit_bday" name="bday" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_id_groups">Группа:</label>
                            <select id="edit_id_groups" name="id_groups1" required>
                                <?php
                                $result_grypa = $con->query("SELECT id_groups1, name FROM groups1");
                                while ($grypa = $result_grypa->fetch_assoc()) {
                                    echo "<option value='".$grypa['id_groups1']."'>".$grypa['name']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </form>
                </div>
            </div>
            
            <!-- Delete User Modal -->
            <div id="deleteUserModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeDeleteUserModal()">&times;</span>
                    <h2>Удалить студента</h2>
                    <form id="deleteUserForm" method="post" action="delete_stud.php">
                        <input type="hidden" id="delete_id_students" name="id_students">
                        <p>Вы уверены, что хотите удалить этого студента?</p>
                        <button type="submit" class="btn btn-danger">Удалить</button>
                        <button type="button" class="btn btn-secondary" onclick="closeDeleteUserModal()">Отмена</button>
                    </form>
                </div>
            </div>
            
            <script>
                function openAddUserModal() {
                    document.getElementById('addUserModal').style.display = 'block';
                }
            
                function closeAddUserModal() {
                    document.getElementById('addUserModal').style.display = 'none';
                }
            
                function openEditUserModal(id, name, secondname, surname, bday, groupsId) {
                    document.getElementById('edit_id_students').value = id;
                    document.getElementById('edit_name').value = name;
                    document.getElementById('edit_secondname').value = secondname;
                    document.getElementById('edit_surname').value = surname;
                    document.getElementById('edit_bday').value = bday;
                    document.getElementById('edit_id_groups').value = groupsId;
                    document.getElementById('editUserModal').style.display = 'block';
                }
            
                function closeEditUserModal() {
                    document.getElementById('editUserModal').style.display = 'none';
                }
            
                function openDeleteUserModal(id) {
                    document.getElementById('delete_id_students').value = id;
                    document.getElementById('deleteUserModal').style.display = 'block';
                }
            
                function closeDeleteUserModal() {
                    document.getElementById('deleteUserModal').style.display = 'none';
                }
            
                window.onclick = function(event) {
                    if (event.target.className === 'modal') {
                        event.target.style.display = 'none';
                    }
                }
            </script>
            
            
            <h2>Преподаватели</h2>
<button onclick="openAddTeachModal()" class="btn btn-success">Добавить преподавателя</button></br></br>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Фамилия</th>
            <th>Дата рождения</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $servername = "localhost";
$username = "romanohe_kollege";
$password = "Qwerty123";
$dbname = "romanohe_kollege"; 

        // Создаем соединение
        $con = new mysqli($servername, $username, $password, $dbname);

        // Проверяем соединение
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Включаем запрос к базе данных
        $result_teachers = $con->query("SELECT * FROM teachers");
        if ($result_teachers->num_rows > 0) {
            while($row = $result_teachers->fetch_assoc()) {
                echo "<tr><td>".$row["id_teachers"]."</td><td>".$row["name"]."</td><td>".$row["secondname"]."</td><td>".$row["surname"]."</td><td>".$row["bday"]."</td>
                <td><button onclick='openEditTeachModal(".$row["id_teachers"].", \"".$row["name"]."\", \"".$row["secondname"]."\", \"".$row["surname"]."\", \"".$row["bday"]."\")' class='btn btn-primary'>Изменить</button>
                <button onclick='openDeleteTeachModal(".$row["id_teachers"].")' class='btn btn-danger'>Удалить</button></td></tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Нет зарегистрированных учителей</td></tr>";
        }
    ?>
    </tbody>
</table>

<!-- Add Teacher Modal -->
<div id="addTeachModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAddTeachModal()">&times;</span>
        <h2>Добавить преподавателя</h2>
        <form id="addTeachForm" method="post" action="add_teach.php">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name_teach" name="name" required>
            </div>
            <div class="form-group">
                <label for="secondname">Отчество:</label>
                <input type="text" id="secondname_teach" name="secondname" required>
            </div>
            <div class="form-group">
                <label for="surname">Фамилия:</label>
                <input type="text" id="surname_teach" name="surname" required>
            </div>
            <div class="form-group">
                <label for="bday">Дата рождения:</label>
                <input type="date" id="bday_teach" name="bday" required>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>

<!-- Edit Teacher Modal -->
<div id="editTeachModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeEditTeachModal()">&times;</span>
        <h2>Изменить преподавателя</h2>
        <form id="editTeachForm" method="post" action="edit_teach.php">
            <input type="hidden" id="edit_id_teachers" name="id_teachers">
            <div class="form-group">
                <label for="edit_name">Имя:</label>
                <input type="text" id="edit_name_teach" name="name" required>
            </div>
            <div class="form-group">
                <label for="edit_secondname">Отчество:</label>
                <input type="text" id="edit_secondname_teach" name="secondname" required>
            </div>
            <div class="form-group">
                <label for="edit_surname">Фамилия:</label>
                <input type="text" id="edit_surname_teach" name="surname" required>
            </div>
            <div class="form-group">
                <label for="edit_bday">Дата рождения:</label>
                <input type="date" id="edit_bday_teach" name="bday" required>
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
</div>

<!-- Delete Teacher Modal -->
<div id="deleteTeachModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeDeleteTeachModal()">&times;</span>
        <h2>Удалить преподавателя</h2>
        <form id="deleteTeachForm" method="post" action="delete_teach.php">
            <input type="hidden" id="delete_id_teachers" name="id_teachers">
            <p>Вы уверены, что хотите удалить этого преподавателя?</p>
            <button type="submit" class="btn btn-danger">Удалить</button>
            <button type="button" class="btn btn-secondary" onclick="closeDeleteTeachModal()">Отмена</button>
        </form>
    </div>
</div>

<script>
    function openAddTeachModal() {
        document.getElementById('addTeachModal').style.display = 'block';
    }

    function closeAddTeachModal() {
        document.getElementById('addTeachModal').style.display = 'none';
    }

    function openEditTeachModal(id, name, secondname, surname, bday) {

    document.getElementById('edit_id_teachers').value = id;
    document.getElementById('edit_name_teach').value = name;
    document.getElementById('edit_secondname_teach').value = secondname;
    document.getElementById('edit_surname_teach').value = surname;
    document.getElementById('edit_bday_teach').value = bday;
    document.getElementById('editTeachModal').style.display = 'block';
}

    function closeEditTeachModal() {
        document.getElementById('editTeachModal').style.display = 'none';
    }

    function openDeleteTeachModal(id) {
        document.getElementById('delete_id_teachers').value = id;
        document.getElementById('deleteTeachModal').style.display = 'block';
    }

    function closeDeleteTeachModal() {
        document.getElementById('deleteTeachModal').style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
        }
    }
</script>


<div class="container">
    <h2>Предметы</h2>
    <button class="btn btn-success" onclick="openAddSubjectModal()">Добавить предмет</button><br><br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result_subjects = $con->query("SELECT * FROM subjects");
            if ($result_subjects->num_rows > 0) {
                while ($row = $result_subjects->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id_subjects']}</td>
                            <td>{$row['name']}</td>
                            <td>
                                <button onclick='openEditSubjectModal({$row['id_subjects']}, \"{$row['name']}\")' class='btn btn-primary'>Изменить</button>
                                <button onclick='openDeleteSubjectModal({$row['id_subjects']})' class='btn btn-danger'>Удалить</button>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Нет зарегистрированных предметов</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Add Subject Modal -->
    <div id="addSubjectModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeAddSubjectModal()">&times;</span>
            <h2>Добавить предмет</h2>
            <form id="addSubjectForm" method="post" action="add_subject.php">
                <div class="form-group">
                    <label for="name">Название:</label>
                    <input type="text" id="name_sub" name="name" required>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>

    <!-- Edit Subject Modal -->
    <div id="editSubjectModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditSubjectModal()">&times;</span>
            <h2>Изменить предмет</h2>
            <form id="editSubjectForm" method="post" action="edit_subject.php">
                <input type="hidden" id="edit_id_subjects" name="id_subjects">
                <div class="form-group">
                    <label for="edit_name">Название:</label>
                    <input type="text" id="edit_name_sub" name="name" required>
                </div>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>
    </div>

    <!-- Delete Subject Modal -->
    <div id="deleteSubjectModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeDeleteSubjectModal()">&times;</span>
            <h2>Удалить предмет</h2>
            <form id="deleteSubjectForm" method="post" action="delete_subject.php">
                <input type="hidden" id="delete_id_subjects" name="id_subjects">
                <p>Вы уверены, что хотите удалить этот предмет?</p>
                <button type="submit" class="btn btn-danger">Удалить</button>
                <button type="button" class="btn btn-secondary" onclick="closeDeleteSubjectModal()">Отмена</button>
            </form>
        </div>
    </div>
</div>

<script>
    function openAddSubjectModal() {
        document.getElementById('addSubjectModal').style.display = 'block';
    }

    function closeAddSubjectModal() {
        document.getElementById('addSubjectModal').style.display = 'none';
    }

    function openEditSubjectModal(id, name) {
        document.getElementById('edit_id_subjects').value = id;
        document.getElementById('edit_name_sub').value = name;
        document.getElementById('editSubjectModal').style.display = 'block';
    }

    function closeEditSubjectModal() {
        document.getElementById('editSubjectModal').style.display = 'none';
    }

    function openDeleteSubjectModal(id) {
        document.getElementById('delete_id_subjects').value = id;
        document.getElementById('deleteSubjectModal').style.display = 'block';
    }

    function closeDeleteSubjectModal() {
        document.getElementById('deleteSubjectModal').style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target.className === 'modal') {
            event.target.style.display = 'none';
        }
    }
</script>


<h2>Расписание</h2>
<button onclick="openaddttModal()" class="btn btn-success">Добавить расписание</button></br></br>
<form method="get" action="">
    <label for="teacher_filter">Фамилия преподавателя:</label>
    <select id="teacher_filter" name="teacher_filter" required>
        <option value="">Все преподаватели</option>
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

        $result_teachers = $con->query("SELECT DISTINCT surname FROM teachers");
        while ($teacher = $result_teachers->fetch_assoc()) {
            echo "<option value='".$teacher['surname']."'>".$teacher['surname']."</option>";
        }
        ?>
    </select>
    <button type="submit" class="btn btn-primary">Фильтр</button>
    <button type="button" class="btn btn-secondary" onclick="window.location.href=window.location.pathname">Сбросить фильтр</button>
</form>
</br></br>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Группа</th>
            <th>Преподаватель</th>
            <th>Предмет</th>
            <th>Кабинет</th>
            <th>День недели</th>
            <th>Пара</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $teacher_filter = isset($_GET['teacher_filter']) ? $_GET['teacher_filter'] : '';

        $sql_timetable = "SELECT timetable.id_tt, timetable.day,timetable.para, groups1.name as group_name, teachers.surname as teacher_name, subjects.name as subject_name, kabinet 
                          FROM timetable 
                          JOIN subjects ON timetable.id_subjects = subjects.id_subjects 
                          JOIN teachers ON timetable.id_teachers = teachers.id_teachers 
                          JOIN groups1 ON timetable.id_groups1 = groups1.id_groups1";

        if (!empty($teacher_filter)) {
            $sql_timetable .= " WHERE teachers.surname = '".$con->real_escape_string($teacher_filter)."'";
        }

        $result_timetable = $con->query($sql_timetable);

        if ($result_timetable->num_rows > 0) {
            while ($row = $result_timetable->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id_tt"] . "</td>
                        <td>" . $row["group_name"] . "</td>
                        <td>" . $row["teacher_name"] . "</td>
                        <td>" . $row["subject_name"] . "</td>
                        <td>" . $row["kabinet"] . "</td>
                        <td>" . $row["day"] . "</td>
                        <td>" . $row["para"] . "</td>
                        <td>
                            <button onclick='openeditttModal(" . $row["id_tt"] . ", \"" . $row["group_name"] . "\", \"" . $row["teacher_name"] . "\", \"" . $row["subject_name"] . "\", \"" . $row["kabinet"] . "\", \"" . $row["day"] . "\", \"" . $row["para"] . "\")' class='btn btn-primary'>Изменить</button>
                            <button onclick='opendeletettModal(" . $row["id_tt"] . ")' class='btn btn-danger'>Удалить</button>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Нет расписания</td></tr>";
        }
        ?>
    </tbody>
</table>

<script>
function openaddttModal() {
    document.getElementById('addttModal').style.display = 'block';
}

function closeaddttModal() {
    document.getElementById('addttModal').style.display = 'none';
}

function openeditttModal(id, groupName, teacherName, subjectName, kabinet,day, para) {
    document.getElementById('edit_id_tt').value = id;
    document.getElementById('edit_id_groups').value = groupName;
    document.getElementById('edit_id_teachers1').value = teacherName;
    document.getElementById('edit_id_subjects1').value = subjectName;
    document.getElementById('edit_kabinet').value = kabinet;
    document.getElementById('edit_day').value = day;
    document.getElementById('id_para').value = para;
    document.getElementById('editttModal').style.display = 'block';
}

function closeeditttModal() {
    document.getElementById('editttModal').style.display = 'none';
}

function opendeletettModal(id) {
    document.getElementById('delete_id_tt').value = id;
    document.getElementById('deletettModal').style.display = 'block';
}

function closedeletettModal() {
    document.getElementById('deletettModal').style.display = 'none';
}

window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = 'none';
    }
}
</script>

<!-- Add Timetable Modal -->
<div id="addttModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeaddttModal()">&times;</span>
        <h2>Добавить расписание</h2>
        <form id="addttForm" method="post" action="add_tt.php">
            <div class="form-group">
                <label for="id_groups1">Группа:</label>
                <select id="id_groups1" name="id_groups1" required>
                    <?php
                    $result_groups = $con->query("SELECT id_groups1, name FROM groups1");
                    while ($group = $result_groups->fetch_assoc()) {
                        echo "<option value='".$group['id_groups1']."'>".$group['name']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_teachers">Преподаватель:</label>
                <select id="id_teachers" name="id_teachers" required>
                    <?php
                    $result_teachers = $con->query("SELECT id_teachers, surname FROM teachers");
                    while ($teacher = $result_teachers->fetch_assoc()) {
                        echo "<option value='".$teacher['id_teachers']."'>".$teacher['surname']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_subjects">Предмет:</label>
                <select id="id_subjects" name="id_subjects" required>
                    <?php
                    $result_subjects = $con->query("SELECT id_subjects, name FROM subjects");
                    while ($subject = $result_subjects->fetch_assoc()) {
                        echo "<option value='".$subject['id_subjects']."'>".$subject['name']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="kabinet">Кабинет:</label>
                <input type="text" id="kabinet" name="kabinet" required>
            </div>
            <div class="form-group">
                <label for="id_day">День:</label>
                <select id="id_day" name="day" required>
                    <option value="Понедельник">Понедельник</option>
                    <option value="Вторник">Вторник</option>
                    <option value="Среда">Среда</option>
                    <option value="Четверг">Четверг</option>
                    <option value="Пятница">Пятница</option>
                    <option value="Суббота">Суббота</option>
                </select>

            </div>
            <div class="form-group">
                <label for="id_para">Пара:</label>
                <select id="id_para" name="para" required>
                    <option value="1 пара">1 пара</option>
                    <option value="2 пара">2 пара</option>
                    <option value="3 пара">3 пара</option>
                    <option value="4 пара">4 пара</option>
                    <option value="5 пара">5 пара</option>
                    <option value="6 пара">6 пара</option>
                    <option value="7 пара">7 пара</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>

<!-- Edit Timetable Modal -->
<div id="editttModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeeditttModal()">&times;</span>
        <h2>Изменить расписание</h2>
        <form id="editttForm" method="post" action="edit_tt.php">
            <input type="hidden" id="edit_id_tt" name="id_tt">
            <div class="form-group">
                <label for="edit_id_groups">Группа:</label>
                <select id="edit_id_groups" name="id_groups1" required>
                    <?php
                    $result_groups = $con->query("SELECT id_groups1, name FROM groups1");
                    while ($group = $result_groups->fetch_assoc()) {
                        echo "<option value='".$group['id_groups1']."'>".$group['name']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="edit_id_teachers1">Преподаватель:</label>
                <select id="edit_id_teachers1" name="id_teachers" required>
                    <?php
                    $result_teachers = $con->query("SELECT id_teachers, surname FROM teachers");
                    while ($teacher = $result_teachers->fetch_assoc()) {
                        echo "<option value='".$teacher['id_teachers']."'>".$teacher['surname']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="edit_id_subjects1">Предмет:</label>
                <select id="edit_id_subjects1" name="id_subjects" required>
                    <?php
                    $result_subjects = $con->query("SELECT id_subjects, name FROM subjects");
                    while ($subject = $result_subjects->fetch_assoc()) {
                        echo "<option value='".$subject['id_subjects']."'>".$subject['name']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="edit_kabinet">Кабинет:</label>
                <input type="text" id="edit_kabinet" name="kabinet" required>
            </div>
            <div class="form-group">
                <label for="edit_day">День:</label>
                <select id="edit_day" name="day" required>
                    <option value="Понедельник">Понедельник</option>
                    <option value="Вторник">Вторник</option>
                    <option value="Среда">Среда</option>
                    <option value="Четверг">Четверг</option>
                    <option value="Пятница">Пятница</option>
                    <option value="Суббота">Суббота</option>
                </select>

            </div>
            <div class="form-group">
                <label for="edit_para">Пара:</label>
                <select id="edit_para" name="para" required>
                    <option value="1 пара">1 пара</option>
                    <option value="2 пара">2 пара</option>
                    <option value="3 пара">3 пара</option>
                    <option value="4 пара">4 пара</option>
                    <option value="5 пара">5 пара</option>
                    <option value="6 пара">6 пара</option>
                    <option value="7 пара">7 пара</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
</div>

<!-- Delete Timetable Modal -->
<div id="deletettModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closedeletettModal()">&times;</span>
        <h2>Удалить расписание</h2>
        <form id="deletettForm" method="post" action="delete_tt.php">
            <input type="hidden" id="delete_id_tt" name="id_tt">
            <p>Вы уверены, что хотите удалить это расписание?</p>
            <button type="submit" class="btn btn-danger">Удалить</button>
            <button type="button" class="btn btn-secondary" onclick="closedeletettModal()">Отмена</button>
        </form>
    </div>
</div>



        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
