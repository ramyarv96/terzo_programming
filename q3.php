<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
	
		<?php 
		
			function arraySort($arr) {
				$bool = false;
				while (!$bool) {
					$bool = true;
					for ($i = 1; $i < sizeof($arr); $i ++) {
					  if ($arr[$i - 1] > $arr[$i]) {
						$bool = false;
						$temp = $arr[$i - 1];
						$arr[$i - 1] = $arr[$i];
						$arr[$i] = $temp;
					  }
					}
				}
				return $arr;
			}
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
					$sorting_arr = arraySort($arr);
					if(sizeof($sorting_arr > 0)) {
						$sorting = '';
						for($j=0;$j<sizeof($sorting_arr);$j++){
							$sorting.=$sorting_arr[$j].',';
						}
						$sorting = rtrim($sorting,',');
						echo "Array : [".$arrayList."]";
						echo "<br />";
						echo "Array sorting without using library : [".$sorting."]";
					}
				}
			}
		?>
		<?php if(empty($_POST['array_size'])){ ?>
		<form action="" method="post">
			<h3>Array sorting without using library</h3>
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
					html+='<input type="number" name="array_'+i+'" /><br />';
				}
				html+='<button type="submit">Submit</button>';
				$("#array_input").html(html);
			}
		</script>
	</body>
</html>
