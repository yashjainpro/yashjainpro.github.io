<html>
	<body>
	<?php	 include('connection.php'); ?>
	<?php  	include('header.php');   ?>
			<div style="margin:300px 300px 300px 450px;">
	<form method="post" action="action.php">
	<input type="text" name="email"  placeholder="EMAIL"/>
	<input type="PASSWORD" name="pass"  placeholder="PASSWORD"/><br/><br/>
	<input type="submit"  style=" background-color: #4CAF50; /* Green */
    border-color: yellow;
    color: white;
    padding: 7px 145px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px; "  value="login" name="login"/>
	<h3 style="color:white;">not a registered user? <a href="register.php">Register here</a>
	</h3>
	<?php
	session_start();

	if(isset($_SESSION['error_login'])) {
	echo $_SESSION['error_login'];
	unset($_SESSION['error_login']);
}
 
  
  ?>
	</form>
	</div>
	</div>
	</div>
	</body>
	</html>