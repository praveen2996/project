<html>
<body>
<form action="login.php" method="POST">
<p><input type="text" name="username" placeholder="Username">
<p><input type="password" name="password" placeholder="Password">
<p><input type="submit" name="login" placeholder="Log In">
 <tr>
  <td>not yet a member? register <a  href="register.php">here</a></td>
  </tr>
</form>
<?php
if(isset($_GET['notify']))
{
	echo $_GET['notify'];
}
?>
<a  href="addrecords.php"></a></div>
<a href="addrecords.php"></a>
</body>
</html>


