<?php session_start(); ?>
<?php
$Z = 8964123; //default password
$a =  $_POST["login"] ;
$b =  $Z ;
if ($a == $b) {
	$_SESSION["a"] = $_POST["login"];
	$_SESSION["e"] = $Z;
	header('Location: ./c.php'); 
} else {
    echo "Have a good night!";
	header('Location: ./index.php'); 
}
?>