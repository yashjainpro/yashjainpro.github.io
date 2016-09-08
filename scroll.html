<?php 
session_start();
include('connection.php');?>
<?php
$uid='2';
$limit=4;	
if(isset($_POST['page'])){
	$page=$_POST['page'];
	if($page==1){
		$start=0;
	}else{
		$start=($page-1)*$limit;
	}
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
		$querys="select * from post where pid in(".$frnd.") order by id desc limit $start,$limit";	
		$results=mysql_query($querys);		
		if($results){ 	 
			$rows2=mysql_num_rows($results);
			if($rows2>0){
				while($datas=mysql_fetch_array($results)){
					  $y= $datas['pid']; 
				$queryj="select * from register where id= $y";				
				$resultj=mysql_query($queryj);	
						if($resultj){ 	 
						$rowsj=mysql_num_rows($resultj);
				if($rowsj>0){
				while($dataj=mysql_fetch_array($resultj)){
						?>
						<div>
					<h1>       	
				<?php echo $dataj['first_name'].$datas['pid']; ?>
							</h1>
							<div style="background:rgba(100,0,225,0.8);">
							<p>	<?php echo $datas['post']; ?>
							</p>
								</div>
								<?php
				}
			}
		}
				}
		
			?>
			<input type="hidden" value="<?php echo $page+1;?>" class="nextpage">
			<input type="hidden" value="true" class="isload">
<?php
			}else{
		?><input type="hidden" value="false" class="isload"><?php
	}
		}
	//Query order by id desc limit $start,$limit
	/*
	$str="";
	if(num_row>0){
	while(){ ?>
	<div>
	
	</div>
	<?php }
	?>
	<input type="hidden" value="<?php echo $page+1;?>" name="nextpage">
	<input type="hidden" value="true" name="isload">
	<?php }else{
		<input type="hidden" value="false" name="isload">
	}
	*/
}
?>