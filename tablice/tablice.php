<?php
	//numeric_table
	$table = array("Labirynt", "Lalka", "Niezwyciężony", 
	"Katar");
	$tableLen = count($table) - 1;
	for($j = $tableLen; $j >= 0; $j--){
		echo $table[$j]."<br>";
		//aso_table
	} $paper = array('copier' => "Do kserokopiarek i uniwersalny",
        'inkjet' => "Do drukarek atramentowych",
        'laser' => "Do drukarek laserowych",
        'photo' => "Papier fotograficzny");
	foreach($paper as $item => $description){
		echo "$item: $description <br>";
		//first&last
	} echo $paper['copier']."<br>".$paper['photo'];
?>