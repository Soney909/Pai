<html>
	<body>
	<form action="./functab.php" method="POST">
		<input name="text" type="text"><br>
		<input name="text1" type="submit" value="Submit">
		</br>
		<input name="numeric" type="number"><br>
		<input name="numeric1" type="submit" value="Submit">
	</form>
	<?php
	if(isset($_POST['numeric']) && isset($_POST['numeric1'])){
		$b = array(1,10,15);
		$a = $_POST["numeric"];
		array_push($b, $a);
		echo print_r($b);
	
	}
	echo "<br>";
	
	//rozgrzewka
	
	//zadanie_1
	$numbers = array(90,10,30,20,40,50,60,70,80,1);
	$temp = explode(' ',"To zdanie ma pięć słów");
	foreach ($numbers as $item){
		echo $item ." ";
	}
	echo "<br>";
	print_r($temp);
	
	//zadanie_2
	$typestring = "alo hlo elo";
	$table = explode(' ',$typestring);
	echo "<br>";
	echo count($temp);
	echo "<br>";
	echo count($table);
	
	//zadanie_3
	echo "<br>";
	sort($numbers, SORT_NUMERIC);
	foreach ($numbers as $x){
		echo $x ." ";
	}
	echo "<br>";
	sort($table, SORT_STRING);
	foreach ($table as $s){
		echo $s ." ";
	}
	echo "<br>";
	rsort($numbers, SORT_NUMERIC);
	foreach ($numbers as $rx){
		echo $rx ." ";
	}
	echo "<br>";
	rsort($table, SORT_STRING);
	foreach ($table as $rs){
		echo $rs ." ";
	}
	
	//zadanie_4
	echo "<br>";
	shuffle($table);
	shuffle($numbers);
	echo "<br>";
	foreach ($numbers as $sx){
		echo $sx ." ";
	}
	echo "<br>";
	foreach ($table as $ss){
		echo $ss ." ";
	}
	
	//zadanie_5
	echo "<br>";
	echo current($numbers);
	next($numbers);
	next($numbers);
	echo "<br>";
	echo current($numbers);
	reset($numbers);
	echo "<br>";
	echo current($numbers);

	
	
	?>
	</body>
</html>