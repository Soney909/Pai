<?php
session_start();
if(isset($_POST['delete_cookie'])){
	setcookie("StringCookie", "test string", time() - 3600);
	setcookie("IntCookie", 20, time() - 3600);
}
?>
<!DOCTYPE html>
<html>
<body>

<form action="./zmienna-sesji.php" method="POST">
<input type="submit" value="Usuń sesję" name="delete"/>
<input type="submit" value="Usuń cookie" name="delete_cookie"/>
</form>
<?php
echo "Srting: ".$_SESSION["string"]."<br>";
echo "Int: ".$_SESSION["int"]."<br>";
if(isset($_COOKIE["StringCookie"]) && isset($_COOKIE["IntCookie"]) ){
	echo "String cookie: ".$_COOKIE["StringCookie"]."<br>";
	echo "Int cookie: ".$_COOKIE["IntCookie"]."<br>";
}
if(isset($_POST['delete'])){
	session_destroy();

}
?>
</body>
</html>