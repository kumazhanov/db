<?php
$hostname = "srv-pleskdb42.ps.kz:3306"; // название/путь сервера, с MySQL
$username = "innov_user"; // имя пользователя (в Denwer`е по умолчанию "root")
$password = "database@20"; // пароль пользователя (в Denwer`е по умолчанию пароль отсутствует, этот параметр можно оставить пустым)
$dbName = "innovat5_db"; // название базы данных

/* Создаем соединение */
mysqli_connect($hostname, $username, $password) or die ("Не могу создать соединение");
mysqli_query('SET NAMES utf8') or header('Location: Error');

/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysqli_select_db($dbName) or die (mysql_error());
?>