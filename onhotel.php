<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>north tour and travel</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="ddmenu/ddmenu.js" type="text/javascript"></script>

<style type="text/css">
<!--
.style3 {
	color: #000000;
	font-weight: bold;
	font-size: 12px;
}
.style4 {color: #000000}
-->
</style>

<style type="text/css">
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
.style9 {font-size: 13px}
.style10 {color: #006633}
.style12 {color: #009933}
.style13 {font-size: 16px}
.style14 {color: #006666}
-->
</style>
</head>
<body>
<?php include('conn.php');?>
<?php
if (isset($_POST['insert']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$hname = $_POST['hname'];
$htype = $_POST['htype'];
$room = $_POST['room'];
$date = $_POST['date'];
$mobile = $_POST['mobile'];
$special = $_POST['special'];
$res="insert into hotel(name,email,hname,htype,room,date,mobile,special)values('$name','$email','$hname','$htype','$room','$date','$mobile','$special')";

if(!mysql_query("$res"))
{
die("error".mysql_error());
}
header("location:gg.php");
}
?>


<div id="header">
<div id="logo">
<label>
      <input type="image" name="imageField2" id="imageField" src="images/logoo.png" />
    </label>
</div>
<div id="splash">
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
                        <a href="him.php">HIMACHAL</a>
                        <a href="pun.php">PUNJAB</a>
                        <a href="del.php">DELHI</a>
                        <a href="up.php">U.P</a>
                        <a href="ukand.php">UTTARKHAND</a>                                           </div>
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
<div class="style7" id="sidebar">
<ul class="style8">
<li>
<h1 align="center" class="style9 style5 style8" style="color:#006633;"> STATE</h1>
<ul>
  <li><span style="font-size: 13px"><a href="jammu.php" style="color:#006633">Jammu And Kashmir</a></span></li>
  <li class="style9"><a href="him.php" style="color:#006633">Himachal</a></li>
  <li class="style9"><a href="#" style="color:#006633">Punjab</a></li>
  <li class="style9"><a href="delhi.php" style="color:#006633">Dehli</a></li>
  <li class="style9"><a href="#" style="color:#006633">Uttar Pradesh </a></li>
  <li><span class="style9"><a href="#" style="color:#006633">Uttrakhand</a></span></li>
</ul>
</li>
<li>
<h1 align="center" class="style14 style8" style="color:#006633;">Online Booking</h1>
<ul class="style9">
<li><a href="online.php" style="color:#006633">Vehical Service</a></li>
<li><a href="onhotel.php" style="color:#006633">Hotel</a></li>
</ul>
<h1 align="center" class="style14 style8" style="color:#006633;">Gallery</h1>
<ul class="style9">
<li><a href="piccar.php" style="color:#006633">Vehical </a></li>
<li><a href="pichot.php" style="color:#006633">Hotel</a></li>
</ul>
<h1 align="center" class="style1 style2 style8" style="color:#006633">Rate</h1>
<ul class="style9">
<li><a href="rate.php" style="color:#006633">Vehicle Rate</a>
<li><a href="hrate.php" style="color:#006633">Hotel Rate</a></li>
</ul>
</li>
</ul>
</div>
</div>
<hr/>
<div id="page">
<table width="408" height="350" border="0" align="right">
  <tr>
    <td width="398" height="31"><div align="center"><span class="style3 style13 style10">Online booking of Hotels</span></div></td>
    </tr>
  <tr>
    <td height="135"><form id="form1" method="post" action="#">
      <table  cellpadding="5px" cellspacing="3px">

<tr>
<th><span class="style10"> NAME</span></th>
<td ><input type="text" name="name"/></td>
</tr>

<tr>
<th><span class="style10">EMAIL</span></th>
<td><input type="text" name="email"/></td>
</tr>

<tr>
<th><span class="style10">HOTEL NAME</span></th>
<td>
<select name="hname">
             <option>asian plaza,dharmshala</option>
            <option>centre point,dharmshala</option>
            <option>pong hotel,dharamshala</option>
            <option>brightland ,shimla</option>
            <option>marina,shimla</option>
            <option>victoria,shimla</option>
            <option>wildflower hall ,shimla</option>
            <option>silver star,j&k </option>
            <option>hotel jupiter,mnali</option>
            <option>classic hill top,chamba</option>
            <option>citrus,mnali</option>
             <option>chalets naldehra,himachal</option>
             <option>Itc maurya,dehli</option>
             <option>royal plaza,dehli</option>
             <option>royal plaza,dehli</option>
            <option>taj palace,dehli</option>
            <option>aroma hotel,Chandigarh</option>
            <option>K.CRoyal park,Chandigarh</option>
            <option>oyester,hotal,Chandigarh</option>
            <option>J.W Marriotts,Chandigarh</option>
            <option>ramada,amritsar</option>
            <option>Agra - Hotel Taj Khema</option>
            <option>Agra - Rahi Tourist Bungalow</option>
           <option>Allahabad - Rahi Triveni Darshan</option>
           <option>Allahabad - Rahi Ilawart Tourist Bungalow</option>
           <option>Lucknow - Hotel Gomti</option>
            <option>Mathura - Rahi Tourist Banglow</option>
</select></td>
</tr>

<tr>
<th><span class="style10">HOTEL TYPE</span></th>
<td>
<select name="htype">
             <option>Standard</option>
            <option>Superior</option>
            <option>Deluxe</option>
            <option>Luxury</option>

</select>
</td>
</tr>

<tr>
<th><span class="style10">NO. OF ROOMS</span></th>
<td>
<select name="room">
<option>Select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option> 
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>

</select>
</td>
</tr>

<tr>
<th><span class="style10">DATE</span></th>
<td><input type="date" name="date" /></td>
</tr>

<tr>
<th><span class="style10">MOBILE</span></th>
<td><input type="text" name="mobile" /></td>
</tr>

<tr>
<th><span class="style10">SPECIAL REQUEST</span></th>
<td><textarea name="special"></textarea></td>
</tr>


<tr>
<td align="center" colspan="2"><input type="submit" value="SEND" style="background-color:#450100; color:#FFFFFF" name="insert" /><input type="reset" value="Clear"/></td>
</tr>

</table>
    </form></td>
  </tr>
</table>
</div>


<?php include("footer.php");?>
</body>
</html>
