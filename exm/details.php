<?php
$name = $_POST['fname'];
$rno = $_POST['id'];

$con = mysql_connect("srv-pleskdb42.ps.kz:3306","innov_user","database@20");
$db= mysql_select_db("innovat5_db", $con);
$sql = "SELECT address from students where name='".$name."' AND rno=".$rno;
$result = mysql_query($sql,$con);
$row=mysql_fetch_array($result);
echo $row['address'];
?>