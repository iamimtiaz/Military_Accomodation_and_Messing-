<?php
	include_once 'dbcon.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Multiple Insert, Update, Delete(CRUD) using PHP & MySQLi</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>
             
<body style="align-content:center">

            
           
<div class="navbar-header">
            <a class="navbar-brand" href="http://cleartuts.blogspot.com" title=<h1>MIST ACCOMODATION AND MESSING</h1></a>  
            
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/CRUD">HOME</a>
  
        </div>

<div class="container">


</div>


<div class="clearfix"></div><br />

<div class="container">
<form method="post" name="frm">
<table class='table table-bordered table-responsive'>
<tr>
<th>##</th>
<th>week day</th>
<th>Breakfast</th>
<th>Lunch</th>
<th>Dinner</th>
</tr>
<?php
	$res = $MySQLiconn->query("SELECT * FROM menue");
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