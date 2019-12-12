<?php
// Переменные с формы
$name = $_POST['name'];
$text = $_POST['text'];

// Параметры для подключения
$db_host = "srv-pleskdb42.ps.kz:3306";
$db_user = "innov_user"; // Логин БД  
$db_password = "database@20"; // Пароль БД
$db_base = 'innovat5_db'; // Имя БД
$db_table = "mytable"; // Имя Таблицы БД

    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (name,text) VALUES ('$name','$text')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
}
?>
