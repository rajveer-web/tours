<?php
@mysql_connect("localhost","root","");
mysql_select_db("cu1");
if(isset($_POST['submit']))
{
	$photo=$_FILES['photo']['name'];
	$path="photo/".$_FILES['photo']['name'];
	
	move_uploaded_file($_FILES['photo']['tmp_name'],$path);
	$query2="insert into carpic(photo)values('$photo')";
	$exe=mysql_query($query2);
}
?>
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<table border="1">
<tr><td><input type="file" name="photo" /></td></tr>

<tr><td align="center"><input type="submit" value="upload"  name="submit"/></td></tr>
</table>
</form>



<table border="0">
<tr>
<?php 
$select="select photo from carpic";
$i=0;
$query1=mysql_query($select);
while($fetch=mysql_fetch_array($query1))
{
?>
</table>
<td><img src="photo/<?php echo $fetch['photo'];?> "width=300 height=250""/></td>
</tr>


<?php 
 $i++;
 if($i%3=='0')
  { 
  echo"</tr><tr>";  
 
  } 
   
  ?>


<?php
}
?>


</body></html>