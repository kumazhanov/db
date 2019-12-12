<?php
include "auth.php"; //Подключаем БД
//делаем запрос на товары этой категории
$query = "select * from allcat where Id_parent=".$_REQUEST['idcat']."";
$result = mysql_query($query) or die(mysql_error());
// выводим товары полученные по запросу
while ($row=mysql_fetch_array($result))
{
print $row['Name']."<br>";
}
?>