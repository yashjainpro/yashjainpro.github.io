<?php
session_start();
$x=$_SESSION['login_id'];
$query22="UPDATE register SET status='0' where id='$x'";
mysql_query($query22);
session_destroy();
header('location:index.php');

?>