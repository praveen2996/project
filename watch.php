<?php
session_start();
$username=$_SESSION['username'];
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db($username);
$query=mysql_query("SELECT * FROM `video`");
while($row=mysql_fetch_array($query))
{
    $v_id=$row['v_id'];
	$name=$row['name'];
	echo '<br>';
	echo $url=$row['url'];
	echo '<br>';
	echo "you are watching ".$name."<br/>";
    echo '<video width="320" controls>';
	echo  "<source src='$url' type='video/mp4'>";
     echo  '</video>';
     	echo '<br>';
	} 
?>