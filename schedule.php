<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .group-table-container {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
        }
        .group-table {
            min-width: 800px;
            margin-right: 40px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Расписание</h2>

        <!-- Форма фильтров -->
        <form method="GET" class="mb-4">
            <div class="form-row">
                <div class="col">
                    <select class="form-control" name="teacher">
                        <option value="">Выберите преподавателя</option>
                        <?php
                        $con = new mysqli("localhost", "romanohe_kollege", "Qwerty123", "romanohe_kollege");
                        $sql_teachers = "SELECT DISTINCT surname FROM teachers";
                        $result_teachers = $con->query($sql_teachers);

                        if ($result_teachers->num_rows > 0) {
                            while ($teacher = $result_teachers->fetch_assoc()) {
                                echo "<option value='{$teacher['surname']}'" . 
                                     (isset($_GET['teacher']) && $_GET['teacher'] == $teacher['surname'] ? " selected" : "") . 
                                     ">{$teacher['surname']}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" name="group">
                        <option value="">Выберите группу</option>
                        <?php
                        $sql_groups = "SELECT DISTINCT id_groups1, name FROM groups1";
                        $result_groups = $con->query($sql_groups);

                        if ($result_groups->num_rows > 0) {
                            while ($group = $result_groups->fetch_assoc()) {
                                echo "<option value='{$group['id_groups1']}'" . 
                                     (isset($_GET['group']) && $_GET['group'] == $group['id_groups1'] ? " selected" : "") . 
                                     ">{$group['name']}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" name="day">
                        <option value="">Выберите день недели</option>
                        <?php
                        $days = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
                        foreach ($days as $day) {
                            echo "<option value='{$day}'" . 
                                 (isset($_GET['day']) && $_GET['day'] == $day ? " selected" : "") . 
                                 ">{$day}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col" style="display:flex; flex-direction: row; gap:20px;">
                    <button type="submit" class="btn btn-primary">Применить фильтры</button>
                    <a href="?" class="btn btn-secondary">Сбросить фильтры</a>
                </div>
            </div>
        </form>

        <div class="group-table-container">
            <?php
            $sql_groups = "SELECT DISTINCT id_groups1, name FROM groups1";
            $result_groups = $con->query($sql_groups);

            $pairs = ["1 пара", "2 пара", "3 пара", "4 пара", "5 пара", "6 пара", "7 пара"];

            if ($result_groups->num_rows > 0) {
                while ($group = $result_groups->fetch_assoc()) {
                    if (isset($_GET['group']) && $_GET['group'] != '' && $_GET['group'] != $group['id_groups1']) {
                        continue;
                    }
                    echo '<div class="group-table">';
                    echo '<h3>' . $group['name'] . '</h3>';
                    echo '<table class="table table-bordered table-striped">';
                    echo '<thead>
                            <tr>
                                <th>День</th>
                                <th>Пара</th>
                                <th>Предмет</th>
                                <th>Кабинет</th>
                                <th>Преподаватель</th>
                            </tr>
                          </thead>';
                    echo '<tbody>';

                    foreach ($days as $day) {
                        if (isset($_GET['day']) && $_GET['day'] != '' && $_GET['day'] != $day) {
                            continue;
                        }
                        echo "<tr><td rowspan='7'>{$day}</td>";

                        foreach ($pairs as $pair) {
                            echo "<td>{$pair}</td>";

                            // Формируем запрос на расписание с учетом фильтров
                            $sql_timetable = "SELECT subjects.name AS subject_name, teachers.surname AS teacher_name, timetable.kabinet 
                                              FROM timetable 
                                              JOIN subjects ON timetable.id_subjects = subjects.id_subjects 
                                              JOIN teachers ON timetable.id_teachers = teachers.id_teachers
                                              WHERE timetable.day = '{$day}' AND timetable.para = '{$pair}' AND timetable.id_groups1 = '{$group['id_groups1']}'";
                            
                            if (isset($_GET['teacher']) && $_GET['teacher'] != '') {
                                $sql_timetable .= " AND teachers.surname = '{$_GET['teacher']}'";
                            }

                            $result_timetable = $con->query($sql_timetable);

                            if ($result_timetable->num_rows > 0) {
                                while ($row = $result_timetable->fetch_assoc()) {
                                    echo "<td>{$row['subject_name']}</td>
                                          <td>{$row['kabinet']}</td>
                                          <td>{$row['teacher_name']}</td>";
                                }
                            } else {
                                echo "<td colspan='3'>Нет занятий</td>";
                            }

                            echo "</tr>";

                            // Начинаем новую строку, если это не первая пара
                            if ($pair !== "1 пара") {
                                echo "<tr>";
                            }
                        }
                    }

                    echo '</tbody></table></div>';
                }
            }

            $con->close();
            ?>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
