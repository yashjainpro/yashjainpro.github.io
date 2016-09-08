<?php include('connection.php');?>
<?php include('header.php');?>
<?php

	session_start();
	
if(isset($_SESSION['login_id'])){
	
	$uid=$_SESSION['login_id'];
		
	$query="select * from register where id=$uid";
	if($result=mysql_query($query)){
		while($data=mysql_fetch_array($result)){
			
			
			?>
				
				
		<h1 style="height:50px;text-align:center; color:white;">	welcome to connect-u  <?php echo $data['first_name'].'      '.$data['last_name']; ?></h1>
		<?php
		if($data['img']!=''){	?>
		<div style="height:300px; width:300px; border-radius:150px 150px 150px 150px;background:url('images/<?php echo $data['img']; ?>') no-repeat  scroll 0% 0%/100% 100%;; float:left;">	
		<?php	
		}
		else{	?>
		<div style="height:300px; width:300px; border-radius:150px 150px 150px 150px;background-color: rgba(196,196,255,0.2); float:left;">
		<form action="action.php" method="post" enctype="multipart/form-data">
		<input type="file" name="image"/>
		<input type="submit" value="Upload Image" name="img"/>
</form>
<?php	
		}
		?>
		</div>
		 <table border="5" cellpadding="15px" style="color:white; height:500px; margin:auto;border-color:yellow;border-radius:15px; ">
		 <tr>
		 <td>your gender	
		 </td>
		 <td><?php echo  $data['gender']; ?></td>
		 <tr>
		 <td>about u
		 </td>
		 <td><?php echo $data['abt_u']; ?></td>
		 </tr>
		 <tr>
		 <td>your DOB
		 </td>
		 <td><?php echo $data['date_of_birth']; ?></td>
		 </tr>
		 <tr>
		 <tr>
		 <td>your contact no
		 </td>
		 <td><?php echo $data['mob_no']; ?></td>
		 </tr>
		 <tr>
		 
		 <td>your email
		 </td>
		<td><?php echo $data['email']; ?></td>
		 </tr>
		 <tr>
		 <td>
		 your address
		 </td>
		 <td><?php echo $data['address']; ?></td>
		 
		 </tr>
		 <tr>
		 <td>
		 school or college
		 </td>
		<td><?php echo $data['school_or_college']; ?></td>
		 </tr>
		
		</table>
		<a href="logout.php">		<input type="button" style="background-color: rgba(64,0,64,0.2); margin:125px 0px 0px 0px;
    border: solid;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 26px; float:right;border: 2px solid yellow; " name="logout"  value="logout"/></a>
	<a href="edit.php">		<input type="button" style="background-color: rgba(64,0,64,0.2); margin:125px 0px 0px 0px;
    border: solid;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 26px; float:right;border: 2px solid yellow; " name="edit"  value="edit"/></a>
			
	</div>
	</div
	
		<?php } ?>	
		
	<?php  }  ?>
	<?php  }  ?>