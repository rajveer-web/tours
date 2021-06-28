<?php
@mysql_connect("localhost","root","");
mysql_select_db("cu1");
$id=$_GET['id'];

mysql_query("delete from bb where id='$id'");
header('location:him.php');

?>
