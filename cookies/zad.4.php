<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="./zad4.php" method="POST">
<input type="number" value="Dodaj elementy" name="append"/>
<input type="submit" value="Submit elementy" name="submitappend"/>
</form>
<?php
//$array = $_SESSION["arrayArray"];
//echo print_r($array);
if(isset($_POST["submitappend"])){
	//arrayPush($array,$_POST['append']);
	echo "test";
	
}
?>
</body>
</html>