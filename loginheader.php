<?php include('connection.php');?>
<?php include('header.php');?>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap1.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap3.3.6jsbootstrap.min.js"></script>
</head>
<body style="background:url('1.jpg') no-repeat  fixed 0% 0%/100% 100%; >
<?php session_start();
if(!isset($_SESSION['login_id'])){
	 header("location:index.php");
	}
	$uid=$_SESSION['login_id'];
	
	?>
	
	<div style=" width:100%; height:auto; background:rgba(0,0,0,1);float:left;">
	<div>
	<form action="userlist.php"method="post">
	<input type="submit" style="background:url('0.png') no-repeat  fixed 0% 0%/50% 50%;" value="users" name="users"/>
	<input type="text" style="width:500px; height:30px; margin-left:200px;margin-top:60px;" name="search"/>
	<input type="submit" style="background:url('0.png') ; height:24px; width:24px; border:none;" value="" name="searchb"/>
	<a href="timeline.php"><input type="button" style="background:url('0.png') no-repeat  fixed 0% 0%/50% 50%;" value="<?php echo $_SESSION['user']['first_name'];?>" name="users"></a>
	</form>
	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> NOTIFICATION</button> 
	<!-- Modal --> 
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> <h4 class="modal-title" id="myModalLabel"> 	
	<?php 
		echo $a=date('m-d');
		$frndList=array();
		$query5="select * from friendreq  where ( fromid=$uid or toid=$uid) and status='pending'";
		if($result5=mysql_query($query5)){
		while($data1=mysql_fetch_array($result5)){
		if($data1['fromid']==$uid){
			$frndList[]=$data1['toid'];
		}
		else{
			$frndList[]=$data1['fromid'];
		}
		
		}
		}
		
		$frnd=implode(',',$frndList);
		 $querys="select  * from register where id in(".$frnd.") and date_of_birth LIKE '%$a'";
		
		$results=mysql_query($querys);		
		if($results){ 	 
		$rows2=mysql_num_rows($results);
		if($rows2>0){
		while($datas=mysql_fetch_array($results)){
			?>
			<div id="<?php echo $datas['id'] ?>">
			wish b day to <a  onclick="func('<?php echo $datas['id'] ?>')"><?php echo $datas['first_name'] ?></a>
			</div>
	<?php
		}
		}
		}
	?>
	</h4>   <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close </button>  </div> </div><!-- /.modal-content --> </div><!-- /.modal -->
	</div>
	</div>
	<div class="modal fade" id="birthday" role="dialog">
	
	</div>
	<div style="width:25%; height:auto; background:rgba(0,225,225,0.7); float:left;">
	<h3>
	</h3>
	</div>
	<div style="width:40%; height:auto; background:rgba(100,0,225,0.8); float:left;">
	<script>
	function func(id){
	$.ajax({
		type: "POST",
		url: "bday.php",
		data: "data="+id,
		success: function(data) {
			alert(data);
$('#birthday').html(data);
			
			$('#myModal').modal('hide');
			
			$('#birthday').modal('show');
		}
	});
}
	</script>
	