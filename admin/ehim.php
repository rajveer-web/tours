<html>
<head>
<title>PHP update</title>
</head>
<body>
<form method="post">
<table>
<?php 
@$id=$_GET['id'];
@mysql_connect("localhost","root","");
mysql_select_db("cu1");
$query=mysql_query("select * from bb where id='$id'");
$info=mysql_fetch_array($query);
?>
<tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $info['name'];  ?>"></td></tr>
<tr><td>Package:</td><td><input type="text" name="pack" value="<?php echo $info['pack'];  ?>"></td></tr>
<tr><td>Photo:</td><td><input type="text" name="Photo" value="<?php echo $info['photo'];  ?>"></td></tr>
<tr><td>Description:</td><td><input type="text" name="desp" value="<?php echo $info['desp']; ?>" ></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="save"></td></tr>
</table>
</form>
</body>
</html>
<?php 

if (isset($_POST['submit'])){

$name=$_POST['name'];
$pack=$_POST['pack'];
$Photo=$_POST['Photo'];
$desp=$_POST['desp'];

mysql_query("update bb set name='$name',pack='$pack',Photo='$Photo',desp='$desp' where id='$id'");
header('location:him.php');

}
?>