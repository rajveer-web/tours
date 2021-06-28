<?php 
@$con=mysql_connect("localhost","root",""); // connect to server
mysql_select_db("cu1",$con); // selects the db
echo "<center><b> Record Store In Database</b></center>";
 
 $query=mysql_query("SELECT * FROM hotel"); 
 
 echo "<table border cellpadding=3 align='center'>"; 
 echo "<tr>"; 
 echo "<th> Name</th><th>Email</th><th>Hotel Name</th><th>hotel Type</th><th>Rooms</th><th>Mobile</th><th> Date</th><th> Special Request</th></tr>";
 
 while($info=mysql_fetch_array($query)) //retrieves value from the database table.
 { 
 echo "<tr>";
 echo "<td>".$info['name']."</td><td>".$info['email']."</td><td>".$info['hname']."</td><td>".$info['htype']."</td><td>".$info['room']."</td><td>".$info['mobile']."</td><td>".$info['date']."</td><td>".$info['special']."</td></tr>";
 } 
	Print "</table>"; 

?>
<html>
<head>

</head>
<body style="background-image:url(1%20(2).jpg)">
</body>
</html>