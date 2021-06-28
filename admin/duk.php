<?php
@mysql_connect("localhost","root","");
mysql_select_db("cu1");
$id=$_GET['id'];

mysql_query("delete from ukand where id='$id'");
header('location:ukand.php');

?>
