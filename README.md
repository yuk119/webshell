# webshell
in this php code you can control the server with password 
index.php is for login form
b.php is for configure the password
  password is save as variables $Z (default password is 123456)
c.php is for enter the command 
d.php is for execute the command

=============================================================================================
b.php ,c.php ,d.php should include 
<?php session_start();?>
and 
if ($_SESSION["a"] == $_SESSION["e"] ) {
} else {
	header('Location: ./index.php'); 
}
?>

=============================================================================================
the default password
output with utf-8
