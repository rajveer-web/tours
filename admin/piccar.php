<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="index.php">Back</a>
<table border="0">
<tr>
<?php 
@mysql_connect("localhost","root","");
mysql_select_db("cu1");
$select="select photo from carpic ";
$i=0;
$query1=mysql_query($select);
while($fetch=mysql_fetch_array($query1))
{
?>
</table>
<td><img src="pic/<?php echo $fetch['photo'];?> "width=300 height=250""/></td>
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



</body>
</html>
