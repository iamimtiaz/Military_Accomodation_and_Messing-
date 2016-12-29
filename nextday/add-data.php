<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{		
	$total = $_POST['total'];
		
	for($i=1; $i<=1; $i++)
	{
		$fn = $_POST["fname$i"];
		$ln = $_POST["lname$i"];	
		$r = $_POST["roll$i"];
		$ra = $_POST["rank$i"];		
		$sql="INSERT INTO meal(first_name,last_name,roll,rank) VALUES('".$fn."','".$ln."','".$r."','".$ra."')";
		$sql = $MySQLiconn->query($sql);		
	}
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='index.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while inserting , TRY AGAIN');
		</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Multiple Insert, Update, Delete(CRUD) using PHP & MySQLi</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>

<body style="background:#142634">

<label style="color:#71BBDB;font-size:60px;">Officers Messing And Acoomodation</label>
</br>  
</br>  
</br>  
</br>  
</br> 


<div class="container">

</div>



<div class="container">
<?php


	?>
    <form method="post">
    
	<table class='table table-bordered' style="color:#F4F4F4">
    
    <tr>
    <th>##</th>
    <th>Name</th>
    <th>Room</th>
    <th>Roll</th>
    <th>Meal</th>
  
    </tr>
	<?php
	for($i=1; $i<=1; $i++) 
	{
		?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="fname<?php echo $i; ?>" placeholder="name"  /></td>
        <td><input type="text" name="lname<?php echo $i; ?>" placeholder="Room"  /></td>
         <td><input type="text" name="roll<?php echo $i; ?>" placeholder="roll"  /></td>
        <td><input type="text" name="rank<?php echo $i; ?>" placeholder="meal"  /></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="5">
    
    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Records</button> 

  
    
    </td>
    </tr>
    </table>
    </form>
	<?php

?>
</div>

</body>
</html>