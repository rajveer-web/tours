<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
/*Here we are going to declare the variables*/
@$name= $_POST['name'];
@$pack=$_POST['pack'];
@$photo=$_POST['photo'];
@$desp=$_POST['desp'];
@mysql_connect("localhost","root","");
mysql_select_db("cu1");
if(isset($_POST['submit']))
{
	$photo=$_FILES['photo']['name'];
	$path="jammu/".$_FILES['photo']['name'];
	
	move_uploaded_file($_FILES['photo']['tmp_name'],$path);
	$query2="insert into pun(name,pack,photo,desp)values('$name','$pack','$photo','$desp')";
	$exe=mysql_query($query2);
	echo "data is inserted";
}
?>

<fieldset>
<legend> Upload Data of Punjab</legend>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<table border="1">
<tr><td>Name:</td>
<td><input type="text" name="name" /></td></tr>
<tr><td>Package:</td>
<td><input type="text" name="pack" /></td></tr>
<tr><td>Photo:</td>
<td><input type="file" name="photo" /></td></tr>
<tr><td>Description:</td>
<td><input type="text" name="desp" /></td></tr>
<td><input type="submit" value="submit" name="submit"/></td></tr>
</table>
</form>
</fieldset>
<table border="1">
<?php 
@$con=mysql_connect("localhost","root",""); // connect to server
mysql_select_db("cu1",$con); // selects the db
echo "<center><b> Record Store In Database</b></center>";
 
 $query=mysql_query("SELECT * FROM pun"); 
 
 
 
 while($info=mysql_fetch_array($query)) //retrieves value from the database table.
 { 
?>
<td><?php echo $info['id'] ; ?></td>
<td><?php echo $info['name'] ; ?></td>
<td><?php echo $info['pack'] ; ?></td>
<td><img src="jammu/<?php echo $info['photo'];?> "width=50 height=50""/></td>
<td><?php echo $info['desp'] ; ?></td>
<td><a href="dpun.php<?php echo '?id='.$info['id']; ?>">delete</a></td>

<td><a href="epun.php<?php echo '?id='.$info['id']; ?>">Edit</a></td>
</tr>
<?php
}
?>

</body>
</html>
