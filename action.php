<?php include('connection.php');
  session_start();
  if(isset($_POST['signup'])){
	$test=$_POST;
	$fname=$test["first_name"];
	$lname=$test["last_name"];
	$gen=$test["gender"];
	$abt_u=$test["abt_u"];
	$password=$test["PASS"];
	$db= date("Y-m-d", strtotime($test["DOB"])); 
	$email=$test["email"];
	$mob=$test["mob_no"];
	$add=$test["message"];
	$stud=$test["message1"];
     $query="insert into register values('','$fname','$lname','$gen','$abt_u','$password','$db','$email','$mob','$add','$stud','','')";
	
	 if(mysql_query($query)){
		
		header('location:index.php');
	 }
	 else
	 {
		 echo "data not entered";
	 }
 }
 //signuparea ends
 //login area


	if(isset($_POST['login'])){
		$mail=$_POST['email'];
		$pass=$_POST['pass'];
		$query="select * from register where email='$mail' and password=$pass";
		if($result=mysql_query($query)){
		while($data=mysql_fetch_array($result)){
		$_SESSION['login_id']=$data['id'];
		$_SESSION['user']=$data;
		$x=$data['id'];
		$query22="UPDATE register SET status='1' where id='$x'";
		mysql_query($query22);
		header('location:cover.php');
			
		}
		
	}
	else{
	$_SESSION['error_login']="INCORRECT USERNAME";
	header('location:index.php');
	
}

			
		}
		
		//login area ends

if(isset($_GET['id'])){
	$toid=$_GET['id'];
	$fromid=$_SESSION['login_id'];
	$query="insert into friendreq values('','$toid','$fromid','pending')";
	if(mysql_query($query)){
		$_SESSION['abc']="Request Sent ";
	
		header('location:userlist.php');
	}
}
 if(isset($_GET['cid'])){
	echo $toidd=$_GET['cid'];
	echo $fromidd=$_SESSION['login_id'];
	
	$query11="delete  from friendreq where toid=$toidd and status='pending'";
	mysql_query($query11);
	header('location:userlist.php');
}
 if(isset($_POST['edit'])){
	 $test=$_POST;
	$fname=$test["first_name"];
	$lname=$test["last_name"];
	$gen=$test["gender"];
	$abt_u=$test["abt_u"];
	$password=$test["PASS"];
	$db= date("Y-m-d", strtotime($test["DOB"])); 
	$email=$test["email"];
	$mob=$test["mob"];
	$add=$test["message"];
	$stud=$test["message1"];
	$x=$_SESSION['login_id'];
 $query22="UPDATE register SET first_name='$fname', last_name='$lname',gender='$gen',abt_u='$abt_u',password= '$password',date_of_birth='$db',email='$email',mob_no='$mob',address='$add',school_or_college='$stud'WHERE id='$x'";

	mysql_query($query22);
	header('location:timeline.php');
	 
 }
  if(isset($_POST['post'])){
	  $data=$_POST;
	  $pid=$_SESSION['login_id'];
	  $mess=$data['message'];
	  $query="insert into post values('','$pid','$mess')"; 
	if(mysql_query($query)){
	  header('location:cover.php');
	  }
  }
   if(isset($_POST['img'])){
    $a=rand(10,1000);
	$fname=$_FILES["image"]["name"];
	$d=$a.basename($_FILES["image"]["name"]);
	$target_file = "images/".$a. basename($_FILES["image"]["name"]);
if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
$x=$_SESSION['login_id'];
$queryy="UPDATE register SET img='$d' where id=$x";	
	if(mysql_query($queryy))
	{
       header('location:timeline.php');
	    
	}
}
   
   
   }
   
   if(isset($_POST['mess'])){
	    $data=$_POST;
	 $message=$data['message']; 
		$rid=$data['rid'];
		$sid=$_SESSION['login_id'];
		$query="insert into message values('','$rid','$sid','$message')";
	if(mysql_query($query)){
	  header('location:messages.php?mid='.$rid);
	  }
    
   }
  ?>
