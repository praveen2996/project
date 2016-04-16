<?php
session_start();
$username=$_SESSION['username'];
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db($username);

if(isset($_POST['submit']))
{
	$name=$_FILES['file']['name'];
	$temp=$_FILES['file']['tmp_name'];
	$file=$_FILES['file'];
	move_uploaded_file($temp,$username."/".$name);
	$url=$username."/".$name;
       //mysql_query("INSERT INTO 'video' VALUE ('','".$name."','".$url."')");
       mysql_query("INSERT INTO $username.`video` (`v_id`, `name`, `url`) VALUES (NULL, '".$name."', '".$url."');");
	}
	  ?>

<!DOCTYPE html>
<html>
<body>
<a href="watch.php">Videos</a>

<form enctype="multipart/form-data" action="upload.php" method="post">

Browse for File to Upolad: <br>
<input name="file" type="file" id="file" size="80"><br>
<input type="submit"  name="submit" value="Upload ">
</form>
<?php
if(isset($_POST['submit']))
{
	
	echo "<br />".$name."has been uploaded";
}
?>

</body>
</html>