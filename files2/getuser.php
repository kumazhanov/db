<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>

    <?php
    $q = intval($_GET['q']);

    // Параметры для подключения
    $db_host = "srv-pleskdb42.ps.kz:3306";
    $db_user = "innov_user"; // Логин БД  
    $db_password = "database@20"; // Пароль БД
    $db_base = 'innovat5_db'; // Имя БД
    $db_table = "user"; // Имя Таблицы БД

    // Подключение к базе данных
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
    if ($mysqli->connect_error) {
        die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    mysqli_select_db($mysqli, "ajax_demo");
    $sql = "SELECT * FROM user WHERE id = '" . $q . "'";
    $result = mysqli_query($mysqli, $sql);

    echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Hometown'] . "</td>";
        echo "<td>" . $row['Job'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($mysqli);
    ?>
</body>

</html>