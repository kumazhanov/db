<?php
include "auth.php";//Подключаем БД
//делаем запрос на категории
$query = "select * from allcat where Id_parent=0 ";
$result = mysql_query($query) or die(mysql_error());
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
<form id="myForm">
Выберите Категорию:<br/>
<select id="idcat">
<?php
//Выводим категории и ее ID
while ($row=mysql_fetch_array($result))
{
print "<option value=".$row['Id_cat'].">";
print $row['Name'];
echo("</option>");
}
?>
</select>
</form>

<div id="content"></div>

<script>
$(document).ready(function(){

$('#idcat').change(function(){
$.ajax({
type: "POST",
url: "show.php",
data: "idcat="+$("#idcat").val(),
success: function(html){
$("#content").html(html);
}
});
return false;
});

});
</script>

</body>
</html>