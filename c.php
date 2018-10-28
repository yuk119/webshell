<?php
       // 1. 啟動 Session
       session_start();
       // 3. 寫入 Session 變數
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

