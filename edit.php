<?php
session_start();
$uid=$_SESSION['login_id'];
?>
<html>
<style>
	legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
	}
	  fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
</style>

		
	<?php include('connection.php'); 
	$query="select * from register where id=$uid";
	if($result=mysql_query($query)){
		while($data=mysql_fetch_array($result)){
	?>
			
    <div style="width:450px; margin:auto;">
            <fieldset>
                <legend>Register Form</legend>
				<form action="action.php" method="post">
                <div>
                    <input type="text" name="first_name" placeholder="First Name" value="<?php echo $data['first_name'];?>"/><br/><br/>
					
                </div>
                <div>
                    <input type="text" name="last_name" placeholder="Last Name"value="<?php echo $data['last_name']; ?>"/><br/><br/>
                </div>
				<div>
				<h4>GENDER</h4>
				<?php 
				if($data['gender']=="male"){ ?>
					<input type="radio"  id="m" name="gender" value="male" checked />male; 
					<input type="radio" id="m"  name="gender" value ="female"/>female;
				<?php  }
				elseif($data['gender']=="female") { ?>
				<input type="radio"  id="m" name="gender" value="male" />male; 
				<input type="radio" id="m"  name="gender" value ="female"  checked />female;
						<?php  }   ?>
					</div>
					<div>
				<h4>about you</h4>
					 <textarea name="abt_u" placeholder="tell us something u want to share"><?php echo $data['abt_u']; ?></textarea><br/>
                <div>
				<br/>
                    <input type="password" name="PASS" placeholder="Password"/>
					<br/><br/>
                </div>
				<div>
                    <input type="text" name="DOB" placeholder="DOB DD/MM/YR FORMAT" value="<?php echo $data['date_of_birth']; ?>" /><br/><br/>
                </div>
				
                <div>
                    <input type="text" name="email" placeholder="Email" value="<?php echo $data['email']; ?>"/><br/><br/>
                </div>
				 <div>
              <input type="text" name="mob" placeholder="your mobile no" value="<?php echo $data['mob_no']; ?>"/><br/><br/>
                </div>
                <div>
                   
                    <textarea name="message" placeholder="ADDRESS">
					<?php echo $data['address']; ?></textarea><br/><br/>
                </div>    
				<div>
                   
                    <textarea name="message1" placeholder="where ARE u STUDYING/WORKING"><?php echo $data['school_or_college']; ?></textarea><br/><br/>
                </div>  
                <input type="submit" name="edit" value="Signup"/><a href="index.php"><input type="button" name="login" value="login"/> </a>
            </fieldset>    
        </form>
    
	</div>
	</div>
	</div>
	</div>

	<?php   
	}}
	?>
	</body>
	
	</html>