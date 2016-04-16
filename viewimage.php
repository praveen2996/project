<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$username=$_SESSION['username'];
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db($username);
$query=mysql_query("SELECT * FROM `images`");

while($row=mysql_fetch_array($query))
{
    echo $image_id=$row['image_id'];
	echo $name=$row['image'];
	
	echo "<img src=$row[image_path] height='150' width='150'>";
	echo $name;
	echo '<br>';
	} 
	
?>
</body>
</html>