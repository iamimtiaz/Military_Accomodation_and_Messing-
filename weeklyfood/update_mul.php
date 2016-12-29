<?php
include_once 'dbcon.php';
$id = $_POST['id'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$r = $_POST['r'];
$ra = $_POST['ra'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE menue SET first_name='$fn[$i]', last_name='$ln[$i]',roll='$fn[$i]', rank='$ln[$i]' WHERE id=".$id[$i]);
}
header("Location: index.php");
?>