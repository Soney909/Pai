<html>
	<body>
		<?php
		
			$chatCounter = 1;
			
			if ($chatCounter == 0){
				echo "<h1> Masz ". $chatCounter ." wiadomości </h1>";
			} else {
				echo "<h1> Masz ". $chatCounter + 5 * ($chatCounter + 3)  ." wiadomości </h1>";
			}
		?>
		
	</body>

</html>