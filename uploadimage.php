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
	$image_size = $_FILES['file']['size'];
	$image_type = pathinfo($target_file,PATHINFO_EXTENSION);
	move_uploaded_file($temp,$target_dir.$name);
	$image_path=$username."/".$name;
       mysql_query("INSERT INTO $username.`images` (`image_id`,`image`, `image_type`, `image_size`,`image_path`) VALUES (NULL,'".$name."', '".$image_type."','".$image_size."','".$image_path."');");
	}
	  ?>

<!DOCTYPE html>
<html>
<body>
<a href="viewimage.php">Images</a>

<form enctype="multipart/form-data" action="uploadimage.php" method="post">

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