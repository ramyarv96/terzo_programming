<html>
	<body>
	
		<?php 
		
			$arr = array();
			if(!empty($_POST['words'])){
				$words = $_POST['words'];
				$split = explode (" ", $words);
				foreach($split as $k=>$v){
					if($v!=''){
						array_push($arr,$v);
					}
				}
				if(sizeof($arr > 0)) {
					$val = array_count_values($arr);
					echo "Word : ".$words;
					echo "<br />";
					print_r($val);
				}
			}
		?>
		<?php if(empty($_POST['words'])){ ?>
		<form action="" method="post">
			Enter the words : <input type="text" name="words" id="words" /><br />
			<button type="submit">Submit</button>
		</form>
		<?php } ?>
	</body>
</html>
