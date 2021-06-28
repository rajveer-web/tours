 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #F0F0F0;
}
body {
	background-color: #c8e6e4;
}
.style2 {
	font-size: 18px;
	font-weight: bold;
	color: #006633;
}
.style3 {
	color: #006633;
	font-weight: bold;
}
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="logo">
 <label>
       <div align="center">
         <input type="image" name="imageField2" id="imageField" src="images/logoo.png" />
          </div>
 </label>
</div>
<div align="center" class="style2">
  <h1>ADMIN LOGIN</h1>
</div>

<?php
session_start();
$message ="";
//echo session_id();

if(count($_POST)>0) //reads your post submission
{

@$conn = mysql_connect("localhost","root","");  //connection built

mysql_select_db("cu1",$conn); //selecting the db

$result = mysql_query("SELECT * FROM admin WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");

$row  = mysql_fetch_array($result);

if(is_array($row)) // check if variable is an array
{
$_SESSION["id"] = $row[id];
$_SESSION["username"] = $row[username];
} 

else
{
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) 
{
//header("Location:full.php");
}

?>


<table width="492" height="139" border="0" align="center">
<div class="message" style="background-color:#006633; text-align:center" ><?php if($message!="") { echo $message; } ?></div>
<form id="form1" name="form1" method="post" action="full.php">
  <tr>
    <td width="148" class="style3">USERNAME:</td>
    <td width="296"><span id="sprytextfield1">
      <label>
      <input type="text" name="username" />
      </label>
      <span class="textfieldRequiredMsg"></span></span></td>
  </tr>
  <tr>
    <td><span class="style3">PASSWORD:</span></td>
    <td><span id="sprytextfield2">
      <label>
      <input type="password" name="password" />
      </label>
      <span class="textfieldRequiredMsg"></span></span></td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="Submit" value="Submit" />
        </div>
    </label></td>
  </tr>
  </form>
</table>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
