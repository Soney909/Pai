<html>
<head>
</head>
<body>
	<?php 
		//tab
		$count = 0;
		$tableSize = 10;
		for($i = 1; $i <= $tableSize; $i++){
			for($j = 1; $j <= $tableSize; $j++){
				echo $i. " * ".$j. " = ".$i * $j;
				echo "<br>";
				$count++;
			}
			if($count % 10 == 0){
				echo "Mnożenie przez ⬆️⬆️⬆️ : ". ($count / 10);
				echo "<br>";
				}
		}
		echo "<br>";
		echo "Next Ex";
		echo "<br>";
		
		//square
		
		$szerokosc = 5;
		$wysokosc = 4;
		$count = 0;
		
		for($n = 1; $n <= $szerokosc; $n++){
			echo "*";
			for($k = 0; $k <= $wysokosc; $k++){
				$count++;
				if($n == 1 || $n == 5){
					echo "*";
				}
				else{
					if($k == 4){
						echo "*";
					} else{
						echo "#";
					}
				}
			}
			if($count % 5 == 0){
					echo "<br>";
				}
		}
	?>
</body>
</html>