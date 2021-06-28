<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>north tour and travel</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="ddmenu/ddmenu.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>

<style type="text/css">
<!--
.style3 {
	color: #000000;
	font-weight: bold;
	font-size: 16px;
}
.style4 {color: #000000}
-->
</style>


<!--
.style5 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>

<style type="text/css">
<!--
.style7 {font-family: Georgia, "Times New Roman", Times, serif}
.style8 {font-size: 18px}
.style9 {font-weight: bold}
.style10 {font-size: 13px}
.style11 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 13px;
}
.style13 {color: #006633}
.style14 {font-size: 16px}
-->
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('conn.php');?>
<?php
if (isset($_POST['insert']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$car = $_POST['car'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$time = $_POST['time'];
$res="insert into car(name,email,address,source,destination,car,mobile,date,time)values('$name','$email','$address','$source','$destination','$car','$mobile','$date','$time')";

if(!mysql_query("$res"))
{
die("error".mysql_error());
}
header("location:thank.php");
}
?>

<div id="header">
<div id="logo">
<label>
      <input type="image" name="imageField2" id="imageField" src="images/logoo.png" />
  </label>
</div>
<div id="page">
<input type="image" src="images/3.jpg" align="left" height="266px" width="754"/> 
</div>
<nav id="ddmenu">
    
    <ul style="background-image:url(images/img02.jpg)">
        <li class="full-width">
        <li class="no-sub"><a href="index.php" class="top-heading style15">Home</a></li>
<li>
            <span class="top-heading style15">Tour package</span><div class="dropdown">
                <div class="dd-inner">
<div class="column">
                        <a href="jammu.php">JAMMU AND KASHMIR</a>
                        <a href="himachal.php">HIMACHAL</a>
                        <a href="punjab.php">PUNJAB</a>
                        <a href="delhi.php">DELHI</a>
                        <a href="up.php">U.P</a>
                        <a href="uttarkand.php">UTTARKHAND</a>                                           </div>
      </li>
<li>
            <span class="top-heading style15">Online booking</span>
			<span class="style15"></span>           
            <div class="dropdown">
                <div class="dd-inner">
<div class="column">
                        <a href="online.php">VEHICLE SERVICES</a>
                        <a href="onhotel.php">HOTEL</a>                                           </div>
      </li>
      <li class="no-sub"><a href="about.php" class="top-heading style15">About</a></li>
      <li class="no-sub"><a href="test.php" class="top-heading style15">Testimonial</a></li>
      <li class="no-sub"><a href="mem.php" class="top-heading style15">Membership</a></li>
        <li class="no-sub"><a href="contact.php" class="top-heading style15">Contact us</a></li>
    </ul>
</nav>


</div>
<hr />
<div id="page">
<div id="sidebar">
<ul class="style8">
<li class="style7">
<h1 align="center" class="style9 style5 style8" style="color:#006633;"> STATE</h1>
<ul class="style10">
  <li><a href="jammu.php" style="color:#006633">Jammu And Kashmir</a></li>
  <li class="style7"><a href="himachal.php" style="color:#006633">Himachal</a></li>
  <li class="style7"><a href="punjab.php" style="color:#006633">Punjab</a></li>
  <li class="style7"><a href="delhi.php" style="color:#006633">Dehli</a></li>
  <li class="style7"><a href="up.php" style="color:#006633">Uttar Pradesh </a></li>
  <li class="style7"><a href="uttarkand.php" style="color:#006633">Uttrakhand</a></li>
</ul>
</li>
<li>
<h1 align="center" class="style14 style8" style="color:#006633; font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;">Online Booking</h1>
<ul class="style11">
<li><a href="online.php" style="color:#006633">Vehicle Service</a></li>
<li><a href="onhotel.php" style="color:#006633">Hotel</a></li>
</ul>
<h1 align="center" class="style14 style8" style="color:#006633; font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;">Gallery</h1>
<ul>

<li><a href="online.php" class="style11" style="color:#006633">Vehicle </a></li>
<li class="style7"><a href="onhotel.php" class="style10" style="color:#006633">Hotel</a></li>
</ul>
<h1 align="center" class="style1 style2 style8" style="color:#006633">Rates</h1>
<ul class="style11">
<li><a href="rate.php" style="color:#006633">Vehicle Rate</a>
<li><a href="hrate.php" style="color:#006633">Hotel Rate</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div id="page"> 

  <table width="408" height="339" border="0" align="right" >
  <tr>
    <td width="398" height="33"><div align="center"><span class="style3 style13">Online booking of Vehicle Service</span></div></td>
    </tr>
  <tr>
    <td height="135">
	  <form id="form1" method="post"  action="#">
      <table  border="0"  cellspacing="7" cellpadding="5">

<tr> 
<th width="91"><div align="left"><span class="style13">NAME</span></div></th>
<td width="235"><span id="sprytextfield1">
  <input type="text" name="name"/>
  <span class="textfieldRequiredMsg">Enter NAME.</span></span></td>
</tr>

<tr>
<th><div align="left" class="style13">EMAIL</div></th>
<td><span id="sprytextfield2">
  <input type="text" name="email"/>
  <span class="textfieldRequiredMsg">Enter EMAIL.</span></span></td>
</tr>

<tr>
<th><div align="left"><span class="style13">ADDRESS</span></div></th>
<td><span id="sprytextarea1">
  <textarea name="address"></textarea>
  <span class="textareaRequiredMsg">Enter ADDRESS.</span></span></td>
</tr>

<tr>
<th><div align="left"><span class="style13">SOURCE POINT</span></div></th>
<td><span id="sprytextfield3">
  <input type="text" name="source"/>
  <span class="textfieldRequiredMsg">Enter ADDRESS.</span></span></td>
</tr>

<tr>
<th><div align="left"><span class="style13">DESTINATION POINT</span></div></th>
<td><span id="sprytextfield4">
  <input type="text" name="destination"/>
  <span class="textfieldRequiredMsg">Enter ADDRESS.</span></span></td>
</tr>

<tr>
<th><div align="left"><span class="style13">CAR</span></div></th>
<td>
<select name="car">
<option>Select</option>
<option>SCORPIO </option>
<option>sfari</option>
<option>taxi</option>
<option>Volvo</option>
<option>Ac buses</option>
<option>Tour Buses</option>
<option>Inova</option>
</select></td>
</tr>

<tr>
<th><div align="left"><span class="style13">MOBILE</span></div></th>
<td><span id="sprytextfield5">
  <input type="text" name="mobile" />
  <span class="textfieldRequiredMsg">Enter ADDRESS.</span></span></td>
</tr>

<tr>
<th><div align="left"><span class="style13">DATE</span></div></th>
<td><input type="date" name="date" /></td>
</tr>

<tr>
<th><div align="left"><span class="style13">TIME</span></div></th>
<td><input type="time" name="time" /></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" value="SEND" style="background-color:#450100; color:#FFFFFF" name="insert" /><input type="reset" value="Clear"/></td>
</tr>
</table>
    </form>    </td>
    </tr>
</table>


</div>



<?php include("footer.php");?>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>

