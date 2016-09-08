<?php include('loginheader.php');?>

		
		<form action="action.php" method="post">
		<textarea style="width:90%;" name="message" placeholder="whats on  your mind ?"></textarea>
		 <input type="submit" style="background:yellow; float:right;" value="post" name="post"/>
		</form>
		<?php
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
		$frndList[count($frndList)]=$uid;
		$frnd=implode(',',$frndList);		
		?>
		<img id='loading' src='img/default.gif' style="display:none;">
		<div id="demoajax" style="float:left;width:100%;">
		</div>
		
		
		
	</div>
	<div style="float:left;width:100%;height:500px;">
		</div>
	<div style="width:30%; height:auto; background:rgba(0,225,225,0.7); float:right;">
	
		<?php
		 $queryx="select * from register where id in(".$frnd.") order by id desc";	
		$resultx=mysql_query($queryx);		
		if($resultx){ 	 
			$rowsx=mysql_num_rows($resultx);
			if($rowsx>0){
				while($datax=mysql_fetch_array($resultx)){
						if($datax['id']!=$uid){
				?>
					<h1 style="height:50px;">       	
				<a href="messages.php?mid=<?php echo $datax['id']; ?>" style="color:red;"><?php echo $datax['first_name']; ?>
							</h1>
						<?php }
					}
			}
		}
		?>
	
	</div>
	</div>
	</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</html>