<?php
session_start();
if(isset($_SESSION['login_id'])){

include('connection.php');
 include('header.php');
if(isset($_POST['searchb'])){
	
		$uname=$_POST['search'];
		$query="select * from register where concat_ws(first_name,last_name) like '%$uname%'";
}
else{
	$query="select * from register";
}
if($result=mysql_query($query))
{		
		$rows=mysql_num_rows($result);
		if($rows>0){
			while($data=mysql_fetch_array($result)){
				if($data['id']!=$_SESSION['login_id']){
			?>
				<div style="height:200px;width:60%;float:left;background:rgba(0,225,225,0.7);padding:20px;">
	<h3 style="font-family:cursive;color:rgb(60,20,30)"><a href="visitor.php?gid=<?php echo $data['id']; ?>">	<?php echo $data['first_name'];?></h3></a>
				    </br>
					<span style="font-family:cursive;color:rgb(160,60,30)"><?php echo $data['address'].'&nbsp &nbsp'.$data['email']; ?></span>
				</br>
					<span style="font-family:cursive;color:rgb(160,60,30)"><?php echo $data['abt_u']; ?></span>
					<?php
					$toidd=$data['id'];
					$fromidd=$_SESSION['login_id'];
					$query5="select * from friendreq  where (toid=$toidd and fromid=$fromidd) or (toid=$fromidd and fromid=$toidd)";
					
					if($result5=mysql_query($query5))
					{ 	 
						$rows1=mysql_num_rows($result5);
						if($rows1>0){
						while($data4=mysql_fetch_array($result5)){
							if(($data4['toid']==$toidd )&& ($data4['fromid']==$fromidd)){
						if($data4['status']=='pending'){ 
						?> 
					<input type="button" style="background:url('0.png') no-repeat  fixed 0% 0%/50% 50%;" value="friend request sent" name="friend"/>
				<a href="action.php?cid=<?php echo $data['id']; ?>"> <input type="button"  value="cancel request sent" name="friend2"/></a>  <?php 
}
     if($data4['status']=='friends'){ ?>
    <input type="button" style="background:url('0.png') no-repeat fixed 0% 0%/50% 50%;" value="friends" name="friend"/>
    <input type="button" style="background:url('0.png') no-repeat  fixed 0% 0%/50% 50%;" value="block" name="friend2"/><?php }
							}
							else{
								if($data4['status']=='pending'){ 
						?> 
					<input type="button" style="background:url('0.png') no-repeat  fixed 0% 0%/50% 50%;" value="accept request" name="friend"/>
				<a href="action.php?cid=<?php echo $data['id']; ?>"> <input type="button"  value="reject" name="friend2"/></a>  <?php 
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
					</div>
	
						
		<?php	
			}
		}
		}
	}
	else{?>
			<h1 style="color:yellow; height:45px; text-align:center;">No Record found</h1>
			<?php
		}
}
		?>