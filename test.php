<?
phpinfo();

?>

<?php
$connect=mysql_connect("127.0.0.1","root","123456");
if(!$connect) echo "Mysql Connect Error!";
else echo "��ӭ����PHP��վ�����̳���-www.leapsoul.cn";
mysql_close();
?>