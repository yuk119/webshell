<?php
       // 1. start Session
       session_start();
if ($_SESSION["a"] != NULL) {
echo $_SESSION["a"];
} else {
	header('Location: ./index.php'); 
}
?>
<form method="post" action="d.php">
<input type="text" name="cmd" ><br>
<input type="submit" name="button" value="確定發帖" />
</form>

