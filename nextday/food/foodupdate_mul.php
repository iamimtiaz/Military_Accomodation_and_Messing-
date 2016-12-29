<?php
include_once 'dbcon.php';
$id = $_POST['id'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$r  = $_POST['r'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE users SET item='$fn[$i]', quantity='$ln[$i]', price='$r[$i]' WHERE id=".$id[$i]);
}
header("Location: foodindex.php");
?>