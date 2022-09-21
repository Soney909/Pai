<?php
	
	//marksTask
	
	$mark = rand(0,100);
	$ans = 0;
	
	if($mark >= 0 && $mark <= 39){
		$ans = 1;
	} else if($mark >= 40 && $mark <= 54){
		$ans = 2;
	} else if($mark >= 55 && $mark <= 69){
		$ans = 3;
	} else if($mark >= 70 && $mark <= 84){
		$ans = 4;
	} else if($mark >= 85 && $mark <= 94){
		$ans = 5;
	} else if($mark >= 95 && $mark <= 100){
		$ans = 6;
	} else {
		echo "Invalid Error";
	} echo $ans;
	
	echo "<br>";
	echo "-----";
	echo "<br>";
	
	//loops
	
	for($j = -3; $j <= 3; $j++){
		if($j == 0) continue;
		echo $j;
		echo "<br>";
	}
	
?>