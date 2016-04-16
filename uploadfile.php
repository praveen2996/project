<?php
session_start();
$username=$_SESSION['username'];
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db($username);

if(isset($_POST['submit']))
{  
    $target_dir = $username."/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
	$name=$_FILES['file']['name'];
	$temp=$_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = pathinfo($target_file,PATHINFO_EXTENSION);
    //$file_type = $_FILES['file']['type'];
	move_uploaded_file($temp,$target_dir.$name);
       //mysql_query("INSERT INTO 'fileuploads' VALUE ('','".$name."','".$url."')");
       mysql_query("INSERT INTO $username.`files` (`file_id`,`file`, `file_type`, `file_size`) VALUES (NULL,'".$name."', '".$file_type."','".$file_size."');");
	}
	  ?>

<!DOCTYPE html>
<html>
<body>
<a href="viewfile.php">Files</a>

<form enctype="multipart/form-data" action="uploadfile.php" method="post">

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