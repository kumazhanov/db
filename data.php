<?php
// Переменные с формы
$name = $_POST['name'];
$text = $_POST['text'];

// Параметры для подключения
$db_host = "srv-pleskdb42.ps.kz:3306";
$db_user = "innov_user"; // Логин БД  
$db_password = "123"; // Пароль БД
$db_base = 'innovat5_db'; // Имя БД
$db_table = "mytable"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
