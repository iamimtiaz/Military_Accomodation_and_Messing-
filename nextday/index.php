<?php
	include_once 'dbcon.php';
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
           
<div class="navbar-header">
           
            
         
  
        </div>
     </div>

</div>
<div class="container">


</div>


<div class="clearfix"></div><br />

<div class="container">
<form method="post" name="frm">
<table class='table table-bordered table-responsive' style="color:#F4F4F4">
<tr>
<th>##</th>
<th>Name</th>
<th>Room</th>
<th>Roll</th>
<th>Meal</th>
</tr>
<?php
	$res = $MySQLiconn->query("SELECT * FROM meal");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['roll']; ?></td>
			<td><?php echo $row['rank']; ?></td>
			</tr>
			<?php
		}	
	}
	else
	{
		?>
        <tr>
        <td colspan="5"> No Records Found ...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="5">


    
    <label style="margin-left:100px;">
  
    </label>
   

    
    <label style="margin-left:100px;">

   
    </label>
    
    
    </td>
	</tr>    
    <?php
}

?>

</table>
</form>
</div>

</body>
</html>