<?php

session_start();
if(isset($_POST['username']));
{
$username=$_POST['username'];
$_SESSION['username']=$username;
 $password=$_POST['password'];
 $_SESSION['password']=$password;

if($username && $password)
{
$connect=mysql_connect("localhost","root","");
mysql_select_db("users");
$login=mysql_query("SELECT username FROM users WHERE username='$username'");
while($log=mysql_fetch_assoc($login))
{
$dbusername=$log['username'];
$dbpassword=$log['password'];
}
if($username=$dbusername || $password=$dbpassword)
{
$_SESSION['username']=$dbusername;
$_SESSION['password']=$dbpassword;
header("location:members.php");
}

}
	else
	{
	header("location:index.php?notify=Incorrect Username or Password.");
	}
if(empty($username)	 || empty($password))
{
header("location:index.php?notify=All fields are required.");
}

}
?>