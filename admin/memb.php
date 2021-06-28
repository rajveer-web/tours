<?php 
@$con=mysql_connect("localhost","root",""); // connect to server
mysql_select_db("cu1",$con); // selects the db
echo "<center><b> Record Store In Database</b></center>";
 
 $query=mysql_query("SELECT * FROM mem"); 
 
 echo "<table border cellpadding=3 align='center'>"; 
 echo "<tr>"; 
 echo "<th>First Name</th><th>last Name</th><th>Email</th><th>Password</th><th>Address</th><th> Gender</th><th> Mobile</th></tr>";
 
 while($info=mysql_fetch_array($query)) //retrieves value from the database table.
 { 
 echo "<tr>";
 echo "<td>".$info['fname']."</td><td>".$info['lname']."</td><td>".$info['email']."</td><td>".$info['password']."</td><td>".$info['address']."</td><td>".$info['gender']."</td><td>".$info['mobile']."</td></tr>";
 } 
	Print "</table>"; 

?>
<html>
<head>

</head>
<body style="background-image:url(1%20(2).jpg)">
</body>
</html>