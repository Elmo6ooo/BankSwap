<?php 
require_once("dbtools.inc.php");
session_start();
$link = create_connection();
$email = $_SESSION["Email"];
$sql="INSERT INTO record(Email, Event) VALUES('$email', '登出')";
execute_sql("final", $sql, $link);
unset($_SESSION["Nickname"]); 
unset($_SESSION["Email"]);
header("Location: http://127.0.0.1/BankSwap");
?>