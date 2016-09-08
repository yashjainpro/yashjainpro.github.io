<?php  session_start();
if(isset($_POST['login'])){
$var=$_POST;
$id=$var['id'];
$pass=$var['pass'];

}
if($id=="abc"&& $pass=="123123")
{
	header('location:timeline.php');
	
}
else{
	$_SESSION['error_login']="INCORRECT USERNAME";
	header('location:login.php');
	
}

?>