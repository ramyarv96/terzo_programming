<html>
	<body>
		<div>
			<?php  
				if(!empty($_POST['given_number'])){
					$n = $_POST['given_number']; 
					for($i=0;$i<$n;$i++){  
						$p = $i;
						if($p%2==0){
							for($j=0;$j<=$i;$j++){  
							
								echo $p." ";
							}  
							echo "<br>";  
						}
					}  
				}
				
			?>  
			<?php if(empty($_POST['given_number'])){ ?>
			<form action="" method="post">
				<h3></h3>
				Enter the value of X : <input type="number" name="given_number" id="given_number" /><br />
				<button type="submit">Submit</button>
			</form>
			<?php } ?>
		</div>
	</body>
</html>
