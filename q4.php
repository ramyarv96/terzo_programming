<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
	
		<?php 
		
			$array_size = 0;
			$duplicates = '';
			$arr = array();
			$arrayList = '';
			if(!empty($_POST['array_size'])){
				//$arr = $_POST['array_1'];
				$size = $_POST['array_size'];
				for($i=0;$i<$size;$i++){
					$name = "array_".$i;
					array_push($arr,$_POST[$name]);
					$arrayList.=$_POST[$name].',';
				}
				if(sizeof($arr > 0)) {
					$arrayList = rtrim($arrayList,',');
					$val = array_count_values($arr);
					echo "Array : [".$arrayList."]";
					echo "<br />";
					print_r($val);
				}
			}
		?>
		<?php if(empty($_POST['array_size'])){ ?>
		<form action="" method="post">
			Enter size of array : <input type="number" name="array_size" id="array_size" onchange="myFunction();" /><br />
			<div id="array_input">
			
			</div>
		</form>
		<?php } ?>
		<script>
			
			function myFunction(){
				var size = $("#array_size").val();
				var html = 'Enter Array of Values : <br />';
				for(var i=0; i<size; i++){
					html+='<input type="text" name="array_'+i+'" /><br />';
				}
				html+='<button type="submit">Submit</button>';
				$("#array_input").html(html);
			}
		</script>
	</body>
</html>
