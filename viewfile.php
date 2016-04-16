<?php
session_start();
$username=$_SESSION['username'];
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db($username);
?>


<table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
 $sql="SELECT * FROM `files`";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['file_type'] ?></td>
        <td><?php echo $row['file_size'] ?></td>
        <td><a href="praveen/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
</table>