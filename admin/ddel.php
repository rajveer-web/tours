<?php
@mysql_connect("localhost","root","");
mysql_select_db("cu1");
$id=$_GET['id'];

mysql_query("delete from delhi where id='$id'");
header('location:dehil.php');

?>
