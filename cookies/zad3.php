<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["arrayArray"] = array("jeden",45);
echo "Session variables are set.";
?>

</body>
</html>