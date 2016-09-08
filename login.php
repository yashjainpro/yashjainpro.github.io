<?php session_start()?>
<form action="action1.php" method="post">

 login id- <input type="text" name="id"/><br/><br/>
 password- <input type="text" name="pass"/><br/><br/>
 <input type="submit" value="login" name="login" />
 <?php 
if(isset($_SESSION['error_login'])) {
	echo $_SESSION['error_login'];
	unset($_SESSION['error_login']);
}
 
 
 ?>