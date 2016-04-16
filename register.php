<html>
<form action="register.php" method="POST">
<p><input type="text" name="username" placeholder="Username">
<p><input type="email" name="email" placeholder="Email">
<p><input type="password" name="password" placeholder="Password">
<p><input type="submit" name="submit" placeholder="Register">
</form>
</html>
<?php
error_reporting(1);
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$con =mysql_connect("localhost","root","");
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
  mysql_select_db("users",$con);
  mysql_query("INSERT INTO `users`.`users` (`username`, `password`, `user_id`, `email`) VALUES ('$username', '$password', NULL, '$email');");

   if(isset($username) && isset($password) && isset($email)){
   if(!empty($username) && !empty($password) && !empty($email))
   {   
   echo "you have been registered.";
   }else{
	   echo "all sections are mandatory";
   }
   }
   
   
?>