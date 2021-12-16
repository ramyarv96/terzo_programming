<html>
	<body>
		<div style="text-align:center;">
			<?php  
				if(!empty($_POST['array_size'])){
					//$arr = $_POST['array_1'];
					$size = $_POST['array_size'];
					for($i=0;$i<=$size;$i++){  
						for($k=$size;$k>=$i;$k--){  
							echo "  ";  
						}  
						for($j=1;$j<=$i;$j++){  
							echo "*  ";  
						}  
						echo "<br>";  
					}  
					for($i=($size-1);$i>=1;$i--){  
						for($k=$size;$k>=$i;$k--){  
							echo "  ";  
						}  
						for($j=1;$j<=$i;$j++){  
							echo "*  ";  
						}  
						echo "<br>";  
					}  
				}
			?>  
		</div>
		<div style="text-align:center;">
			<?php  
				if(!empty($_POST['array_size'])){
					//$arr = $_POST['array_1'];
					$size = $_POST['array_size'];
					for($i=0;$i<=$size;$i++){  
						for($k=$size;$k>=$i;$k--){  
							echo "  ";  
						}  
						for($j=1;$j<=$i;$j++){  
							echo "*  ";  
						}  
						echo "<br>";  
					}  
					for($i=($size-1);$i>=1;$i--){  
						for($k=$size;$k>=$i;$k--){  
							echo "  ";  
						}  
						for($j=1;$j<=$i;$j++){  
							echo "*  ";  
						}  
						echo "<br>";  
					}  
				}
			?>  
		</div>
		<?php if(empty($_POST['array_size'])){ ?>
		<form action="" method="post">
			Enter Number : <input type="number" name="array_size" id="array_size" onchange="myFunction();" />
			<button type="submit">Submit</button>
		</form>
		<?php } ?>
	</body>
</html>
