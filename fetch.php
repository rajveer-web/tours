<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php include('conn.php');?>
<?php

@$name=$_POST['name'];
@$comment=$_POST['comment'];

$query = mysql_query("SELECT * FROM test "); 

 while($row=mysql_fetch_array($query)) //retrieves value from the database table.
 { 
 
   echo  " Name: " . $row["name"]." </br>"." </br>" ."Comment: " . $row["comment"]. "<br>"." </br>";   
   
}

?>

</body>
</html>

