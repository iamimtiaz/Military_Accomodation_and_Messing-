<?php
	include_once 'dbcon.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CSS3 Dropdown Menu</title>

<style>


nav {
width:800px;
margin:0 auto;
list-style:none;
margin:0 auto;
}
nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}
nav ul {
	background: #efefef; 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	
    
	position: relative;
	display: inline-table;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}
	
nav ul li {
	float: left;
}
	nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		nav ul li:hover a {
			color: #fff;
		}
	
	nav ul li a {
		display: block; padding: 25px 40px;
		color: #757575; text-decoration: none;
		width:180px;
	}
	nav ul ul {
	background: #5f6975; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
}
	nav ul ul li {
		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}
		nav ul ul li a {
			padding: 15px 40px;
			color: #fff;
		}	
			nav ul ul li a:hover {
				background: #4b545f;
			}

nav ul ul ul {
	position: absolute; left: 100%; top:0;
}		
	

</style>
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>    

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />


</head>

<body style="background:#142634">
<div id="half">
<div id="titlebar">
				<h1 align="center" style="color:#71BBDB;font-size:60px;" >Officers Messing and Accomodation</h1>
			</div> 
            
            </br>  
    <nav style="align-content:center">                 
<ul >
	<li class="current"><a href="http://www.webdesignerwall.com">Home</a></li>
	<li><a href="http://www.ndesign-studio.com">Accomodation</a>
		<ul>
			<li><a href="http://www.ndesign-studio.com">N.Design Studio</a></li>
			<li><a href="http://www.webdesignerwall.com">Web Designer Wall</a></li>
			<li><a href="http://icondock.com">IconDock</a></li>
			<li><a href="http://bestwebgallery.com">Best Web Gallery</a></li>
		</ul>
	</li>
	<li><a href="#">Messing</a>
		<ul>
			<li><a href="#">Team</a></li>
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
	
	<li><a href="#">Contact Us</a></li>
</ul>
  </nav>
 </br> 
  </br> 
   </br> 
    </br> 
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
