<html>
	<body>
	
		<?php 
		
			if(!empty($_POST['ip_address'])){
				$ip = $_POST['ip_address'];
				$split = explode (".", $ip);
				if(sizeof($split) == 4){
					foreach($split as $k=>$v){
						if(is_numeric($v)){
							if($v < 0 || $v > 255){
								echo "IP Address ".$ip." is invalid";
								exit();
							}
						}
					}
					echo "IP Address ".$ip." is valid";
				} else {
					echo "IP Address ".$ip." is invalid";
				}
			}
		?>
		<?php if(empty($_POST['ip_address'])){ ?>
		<form action="" method="post">
			<h3>IP Address Valid or Not</h3>
			Enter IP Address : <input type="text" name="ip_address" id="ip_address" />
			<button type="submit">Submit</button>
		</form>
		<?php } ?>
	</body>
</html>