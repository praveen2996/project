<?php
error_reporting(0);
$connect=mysql_connect("localhost","root","");
$username='praveen';
mysql_select_db($username);
mysql_query("INSERT INTO $username.`files` (`file_id`,`file`, `file_type`, `file_size`) VALUES (NULL,'thisdds', 'ksffka','nsffjnja');");
?>