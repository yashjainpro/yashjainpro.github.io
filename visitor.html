<?php include('connection.php'); ?>
<?php session_start();
 if(isset($_SESSION['login_id'])){
	 $gid=$_GET['gid'];
	 $query="select * from register where id=$gid";
	if($result=mysql_query($query)){
		while($data=mysql_fetch_array($result)){ ?>
		<h1 style="height:50px;text-align:center; color:white; margin-right:0px;">  <?php echo $data['first_name'].'      '.$data['last_name']; ?></h1>
		<?php
		$fromidd=$_SESSION['login_id'];
		$query5="select * from friendreq  where (toid=$gid and fromid=$fromidd) or (toid=$fromidd and fromid=$gid)";
			if($result5=mysql_query($query5))
					{ 	 
						$rows1=mysql_num_rows($result5);
						if($rows1>0){
						while($data4=mysql_fetch_array($result5)){
							if(($data4['toid']==$gid )&& ($data4['fromid']==$fromidd)){
						if($data4['status']=='pending'){ 
						?> 
					<input type="button" style="background:url('0.png') no-repeat  fixed 0% 0%/50% 50%;" value="friend request sent" name="friend"/>
				<a href="action.php?cid=<?php echo  $gid; ?>"> <input type="button"  value="cancel request sent" name="friend2"/></a>  <?php 
}
     if($data4['status']=='friends'){ ?>
    <input type="button" style="background:url('0.png') no-repeat fixed 0% 0%/50% 50%;" value="friends" name="friend"/>
    <input type="button" style="background:url('0.png') no-repeat  fixed 0% 0%/50% 50%;" value="block" name="friend2"/><?php }
							}
							else{
								if($data4['status']=='pending'){ 
						?> 
					<input type="button" style="background:url('0.png') no-repeat  fixed 0% 0%/50% 50%;" value="accept request" name="friend"/>
				<a href="action.php?cid=<?php echo $gid; ?>"> <input type="button"  value="reject" name="friend2"/></a>  <?php 
}
     if($data4['status']=='friends'){ ?>
    <input type="button" style="background:url('0.png') no-repeat fixed 0% 0%/50% 50%;" value="friends" name="friend"/>
    <input type="button" style="background:url('0.png') no-repeat  fixed 0% 0%/50% 50%;" value="block" name="friend2"/>  <?php }
							}
											 	
											}
						}
					
else { ?>
<a href="action.php?id=<?php echo $data['id']; ?>"> 	
					
			<input type="button" style="background:url('0.png') no-repeat  fixed 0% 0%/100% 100%;" value="add friend" name="friend"/></a><?php } }?>
					
					
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
		
		
		
		<?php
 }
	}
 }
  ?>