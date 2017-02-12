<?
phpinfo();

?>

<?php
$connect=mysql_connect("127.0.0.1","root","123456");
if(!$connect) echo "Mysql Connect Error!";
else echo "欢迎访问PHP网站开发教程网-www.leapsoul.cn";
mysql_close();
?>