<html>
	<body>
		<div style="text-align:center;">
			<?php  
				for($i=0;$i<=4;$i++){  
					for($k=4;$k>=$i;$k--){  
						echo "  ";  
					}  
					for($j=1;$j<=$i;$j++){  
						echo "*  ";  
					}  
					echo "<br>";  
				}  
				for($i=3;$i>=1;$i--){  
					for($k=4;$k>=$i;$k--){  
						echo "  ";  
					}  
					for($j=1;$j<=$i;$j++){  
						echo "*  ";  
					}  
					echo "<br>";  
				}  
			?>  
		</div>
	</body>
</html>