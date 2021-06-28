<?php 
@$con=mysql_connect("localhost","root",""); // connect to server
mysql_select_db("cu1",$con); // selects the db
echo "<center><b>Your Record Store In Database</b></center>";
 
 $query=mysql_query("SELECT * FROM car"); 
 
 echo "<table border cellpadding=3 align='center'>"; 
 echo "<tr>"; 
 echo "<th> Name</th><th>Email</th><th>Address</th><th>source Point</th><th>Destination Point</th><th>Car</th><th>Mobile</th><th> Date</th><th> Time</th></tr>";
 
 while($info=mysql_fetch_array($query)) //retrieves value from the database table.
 { 
 echo "<tr>";
 echo "<td>".$info['name']."</td><td>".$info['email']."</td><td>".$info['address']."</td><td>".$info['source']."</td><td>".$info['destination']."</td><td>".$info['car']."</td><td>".$info['mobile']."</td><td>".$info['date']."</td><td>".$info['time']."</td></tr>";
 } 
	Print "</table>"; 

?>
<html>
<head>

</head>
<body style="background-image:url(1%20(2).jpg)">
</body>
</html>