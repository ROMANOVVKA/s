<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: index.php');
    exit;
}

$servername = "localhost";
$username = "romanohe_kollege";
$password = "Qwerty123";
$dbname = "romanohe_kollege"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get exams
$sql_exams = "SELECT exams.id, subjects.name as subject_name, teachers.surname as teacher_name, students.surname as student_name, exams.date, exams.mark, exams.id_subjects, exams.id_teachers, exams.id_students
              FROM exams 
              JOIN subjects ON exams.id_subjects = subjects.id_subjects 
              JOIN teachers ON exams.id_teachers = teachers.id_teachers 
              JOIN students ON exams.id_students = students.id_students";
$result_exams = $conn->query($sql_exams);

// Get subjects for dropdown
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

// Get students for dropdown
$students_result = $conn->query("SELECT id_students, surname FROM students");
$students = [];
while ($row = $students_result->fetch_assoc()) {
    $students[] = $row;
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Страница администратора</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
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
</head>
<body>
    <div>
        <br>
        <div class="container">
            <h1>Добро пожаловать, Преподаватель</h1>
            <a href="index.php" class="btn btn-primary">Перейти на главный сайт</a>
            
            <h2>Сессия</h2>
            <button onclick="openAddExamModal()" class="btn btn-success">Добавить экзамен</button>
            <br><br>

            <h2>Экзамены</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Предмет</th>
                        <th>Преподаватель</th>
                        <th>Студент</th>
                        <th>Дата</th>
                        <th>Оценка</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result_exams->num_rows > 0) {
                        while ($row = $result_exams->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["subject_name"] . "</td>
                                <td>" . $row["teacher_name"] . "</td>
                                <td>" . $row["student_name"] . "</td>
                                <td>" . $row["date"] . "</td>
                                <td>" . $row["mark"] . "</td>
                                <td>
                                    <button onclick='openEditExamModal(" . $row["id"] . ", \"" . $row["subject_name"] . "\", \"" . $row["teacher_name"] . "\", \"" . $row["student_name"] . "\", \"" . $row["date"] . "\", " . $row["mark"] . ")' class='btn btn-primary'>Изменить</button>
                                    <button onclick='openDeleteExamModal(" . $row["id"] . ")' class='btn btn-danger'>Удалить</button>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Нет записей об экзаменах</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Modal for adding exam -->
            <div id="addExamModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeAddExamModal()">&times;</span>
                    <h2>Добавить экзамен</h2>
                    <form id="addExamForm" method="post" action="add_exam.php">
                        <div class="form-group">
                            <label for="subject">Предмет:</label>
                            <select id="subject" name="subject" required>
                                <?php while($row = $subjects_result->fetch_assoc()): ?>
                                    <option value="<?= $row['id_subjects'] ?>"><?= $row['name'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="teacher">Преподаватель:</label>
                            <select id="teacher" name="teacher" required>
                                <?php while($row = $teachers_result->fetch_assoc()): ?>
                                    <option value="<?= $row['id_teachers'] ?>"><?= $row['surname'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="student">Студент:</label>
                            <select id="student" name="student" required>
                                <?php while($row = $students_result->fetch_assoc()): ?>
                                    <option value="<?= $row['id_students'] ?>"><?= $row['surname'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Дата:</label>
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="mark">Оценка:</label>
                            <input type="number" id="mark" name="mark" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                </div>
            </div>
            <script>
                function openAddExamModal() {
                    document.getElementById('addExamModal').style.display = 'block';
                }

                function closeAddExamModal() {
                    document.getElementById('addExamModal').style.display = 'none';
                }
            </script>

            <!-- Modal for editing exam -->
            <div id="editExamModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeEditExamModal()">&times;</span>
                    <h2>Редактировать экзамен</h2>
                    <form id="editExamForm" method="post" action="edit_exam.php">
                        <input type="hidden" id="edit_id" name="id">
                        <div class="form-group">
                            <label for="edit_subject">Предмет:</label>
                            <select id="edit_subject" name="subject" required>
                                <?php foreach ($subjects as $subject): ?>
                                    <option value="<?= $subject['id_subjects'] ?>"><?= htmlspecialchars($subject['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_teacher">Преподаватель:</label>
                            <select id="edit_teacher" name="teacher" required>
                                <?php foreach ($teachers as $teacher): ?>
                                    <option value="<?= $teacher['id_teachers'] ?>"><?= htmlspecialchars($teacher['surname']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_student">Студент:</label>
                            <select id="edit_student" name="student" required>
                                <?php foreach ($students as $student): ?>
                                    <option value="<?= $student['id_students'] ?>"><?= htmlspecialchars($student['surname']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_date">Дата:</label>
                            <input type="date" id="edit_date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_mark">Оценка:</label>
                            <input type="number" id="edit_mark" name="mark" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                    </form>
                </div>
            </div>

            <script>
                function openEditExamModal(id, subject, teacher, student, date, mark) {
                    document.getElementById('edit_id').value = id;
                    document.getElementById('edit_subject').value = subject;
                    document.getElementById('edit_teacher').value = teacher;
                    document.getElementById('edit_student').value = student;
                    document.getElementById('edit_date').value = date;
                    document.getElementById('edit_mark').value = mark;
                    document.getElementById('editExamModal').style.display = 'block';
                }

                function closeEditExamModal() {
                    document.getElementById('editExamModal').style.display = 'none';
                }
            </script>


            <!-- Modal for deleting exam -->
            <div id="deleteExamModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeDeleteExamModal()">&times;</span>
                    <h2>Удалить экзамен</h2>
                    <form id="deleteExamForm" method="post" action="delete_exam.php">
                        <input type="hidden" id="delete_id" name="id">
                        <p>Вы уверены, что хотите удалить этот экзамен?</p>
                        <button type="submit" class="btn btn-danger">Удалить</button>
                        <button type="button" class="btn btn-secondary" onclick="closeDeleteExamModal()">Отмена</button>
                    </form>
                </div>
            </div>
            <script>
                function openDeleteExamModal(id) {
                    document.getElementById('delete_id').value = id;
                    document.getElementById('deleteExamModal').style.display = 'block';
                }

                function closeDeleteExamModal() {
                    document.getElementById('deleteExamModal').style.display = 'none';
                }
            </script>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
