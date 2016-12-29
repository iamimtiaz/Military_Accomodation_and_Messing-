<?php
	include_once 'dbcon.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CSS3 Dropdown Menu</title>

<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>    

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />


</head>

<body>
<div id="half">
<div id="titlebar">
				<h1 align="center">Officers Messing and Accomodation</h1>
			</div> 
            
            </br>           
<ul id="nav">
	<li class="current"><a href="http://www.webdesignerwall.com">Home</a></li>
	<li><a href="http://www.ndesign-studio.com">My Projects</a>
		<ul>
			<li><a href="http://www.ndesign-studio.com">N.Design Studio</a>
				<ul>
					<li><a href="http://www.ndesign-studio.com/portfolio">Portfolio</a></li>
					<li><a href="http://www.ndesign-studio.com/wp-themes">WordPress Themes</a></li>
					<li><a href="http://www.ndesign-studio.com/wallpapers">Wallpapers</a></li>
					<li><a href="http://www.ndesign-studio.com/tutorials">Illustrator Tutorials</a></li>
				</ul>
			</li>
			<li><a href="http://www.webdesignerwall.com">Web Designer Wall</a>
				<ul>
					<li><a href="http://jobs.webdesignerwall.com">Design Job Wall</a></li>
				</ul>
			</li>
			<li><a href="http://icondock.com">IconDock</a></li>
			<li><a href="http://bestwebgallery.com">Best Web Gallery</a></li>
		</ul>
	</li>
	<li><a href="#">Multi-Levels</a>
		<ul>
			<li><a href="#">Team</a>
				<ul>
					<li><a href="#">Sub-Level Item</a></li>
					<li><a href="#">Sub-Level Item</a>
						<ul>
							<li><a href="#">Sub-Level Item</a></li>
							<li><a href="#">Sub-Level Item</a></li>
							<li><a href="#">Sub-Level Item</a></li>
						</ul>
					</li>
					
					<li><a href="#">Sub-Level Item</a></li>
				</ul>
			</li>
			<li><a href="#">Sales</a></li>
			<li><a href="#">Another Link</a></li>
			<li><a href="#">Department</a>
				<ul>
					<li><a href="#">Sub-Level Item</a></li>
					<li><a href="#">Sub-Level Item</a></li>
					<li><a href="#">Sub-Level Item</a></li>
				</ul>
			</li>
		</ul>
	</li>	
	<li><a href="#">About</a></li>
	<li><a href="#">Contact Us</a></li>
</ul>
</div>
<div class="container">
<a href="generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>



<div class="container">
<form method="post" name="frm">
<table class='table table-bordered table-responsive'>
<tr>
<th>##</th>
<th>First Name</th>
<th>Last Name</th>
<th>Roll</th>
<th>Rank</th>
</tr>
<?php
	$res = $MySQLiconn->query("SELECT * FROM users");
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
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>

    
    <label style="margin-left:100px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit_records();" alt="edit" />edit</span> 
    <span><img src="delete.png" onClick="delete_records();" alt="delete" />delete</span>
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
