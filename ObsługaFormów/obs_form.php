<?php
	
	
	if(isset($_POST['login']) and $_POST['password']){
		echo "Login: " . htmlspecialchars($_POST['login']);
		echo "<br>";
		echo sha1($_POST['password']);
	}
	else{
		echo "Cześć nieznajomy.";
	}
	echo "<br>";
	if(isset($_POST['checkBox'])){
		echo "Hasło zostało zapamiętane";
	}
?>