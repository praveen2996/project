<?php

session_start();
if($_SESSION['username'] || $_SESSION['password'])
{
echo "you are logged in as  " .$_SESSION['username'];
echo "<br><br><a href='logout.php'>LogOut</a>";
}
else
{
header("location:index.php?notify=Oops! Something went wrong.");
}
?>
