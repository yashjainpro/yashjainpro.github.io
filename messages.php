<?php include('loginheader.php');
$x=$_GET['mid'];
$query="select * from message  where  sid=$x or rid=$x";
$result=mysql_query($query);		
		if($result){ 	 
			$rows=mysql_num_rows($result);
			if($rows>0){
				while($data=mysql_fetch_array($result)){
if($data['sid']==$x){
	?>
	<div style="background:rgba(100,0,225,0.8); float:left;width:80%;">
							<p>	<?php echo $data['message'].'<br/>'; ?>
							</p> 
								</div>
								
	
	<?php
}
else{
	?>
	<div style="background:rgba(100,0,225,0.8); float:right;width:80%;">
							<p>	<?php echo $data['message']; ?>
							</p> <br/>
								</div>
								
	
	<?php
	
}
				}
			}
		}
?>

<form action="action.php" method="post">
		<textarea style="width:90%; float:right;" name="message" placeholder=""></textarea>
		 <input type="submit" style="background:yellow; float:right;" value="send" name="mess"/>
		  <input type="hidden" value="<?php echo $x; ?>" name="rid"  />
		</form>
		</div>
	
	<div style="width:30%; height:100%; background:rgba(0,225,225,0.7); float:right;">
	</div>
	
	
	
</html>