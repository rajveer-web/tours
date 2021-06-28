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
.style1 {color: #006633}
.style2 {color: #006633; font-size: 24px; }
.style4 {font-size: 18px}
.style5 {font-family: Georgia, "Times New Roman", Times, serif}
.style6 {font-size: 16px}
.style7 {font-size: 10px}
.style8 {color: #FFFFFF}
.style9 {color: #009933}
.style10 {font-size: 13px}
-->
</style>
</head>

<body>
<div id="header">

<div id="logo">
 <label>
      <input type="image" name="imageField2" id="imageField" src="images/logoo.png" />
  </label>
</div><div> 

    <div align="right" style="color:#006633">
      <div style="display:none;">
    <div id="demo3_tip">
        
    </div>
 </div>
</div>
<div id="page">
<div id="splash">
<input type="image" src="images/membership-2.jpg" align="left" height="266px" width="754"/> 
</div></div>


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
<?php include('conn.php')?>
<?php
if (isset($_POST['insert']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];

$res="insert into mem(fname,lname,email,password,address,gender,mobno)values('$fname','$lname','$email','$password','$address','$gender','mobile')";

if(!mysql_query("$res",$conn))
{
die("error".mysql_error());
}
echo "Now you are member of north india tour and travel";
//header("location:index.php");
}
?>
<div id="content">
<h1 align="justify" class="style2 style4">Membership Form</h1>
<div align="justify">
<form name="form1" method="post" action="#">
        <table>
<tr>
                <td height="46" class="style1 style6">First Name:</td>
<td><input type="text" name="fname" id="textfield">
                     
        </td>
              </tr>
              <tr>
                <td height="48"><span class="style1 style6">Last Name</span>:</td>
                <td><input type="text" name="lname" id="textfield2"></td>
</tr>
              <tr>
                <td height="47"><span class="style1 style6">Email</span>:</td>
                <td><input type="text" name="email" id="textfield3"></td>
</tr>
              <tr>
                <td height="50" class="style1 style4"><span class="style6">Password</span>:</td>
                <td><input type="password" name="password" id="textfield4"></td>
</tr>
              <tr>
                <td height="35" class="style1 style6">Gender:</td>
                <td><input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="female") echo "checked";?>
                 value="female"></span>
                  <span class="style1">Female</span>
                      <input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="male") echo "checked";?>
                       value="male">
                 <span class="style1"> Male</span>
</td>
</tr>
              <tr>
                <td height="48" class="style1 style6">Mobile no:</td>
                <td><input type="text" name="mobile" id="textfield6"></td>
</tr>
              <tr>
                <td height="54" class="style1 style6">Address:</td>
                <td><textarea name="address" id="textfield7"></textarea></td>
              </tr>
              <tr>
                
                <td align="center" colspan="2"><input type="submit" value="SEND" style="background-color:#450100; color:#FFFFFF" name="insert" /><input type="reset" value="Clear"/></td>
</tr>
            </table>
  </form>
            
</div>
</div>

<div id="page">
<div id="sidebar">
<ul class="style8">
<li class="style7 style5">
<h1 align="center" class="style9 style8 style4" style="color:#006633;"> STATE</h1>
<ul>
  <li><span style="font-size: 13px"><a href="jammu.php" style="color:#006633">Jammu And Kashmir</a></span></li>
  <li class="style10"><a href="himachal.php" style="color:#006633">Himachal</a></li>
  <li class="style10"><a href="punjab.php" style="color:#006633">Punjab</a></li>
  <li class="style10"><a href="delhi.php" style="color:#006633">Dehli</a></li>
  <li class="style10"><a href="up.php" style="color:#006633">Uttar Pradesh </a></li>
  <li class="style7"><span class="style10"><a href="uttarkand.php" style="color:#006633">Uttrakhand</a></span></li>
</ul>
</li>
<li>
<h1 align="center" class="style14 style8 style4" style="color:#006633; font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;">Online Booking</h1>
<ul class="style11 style5">
<li><a href="online.php" style="color:#006633">Vehicle Service</a></li>
<li><a href="onhotel.php" style="color:#006633">Hotel</a></li>
</ul>
<h1 align="center" class="style14 style8 style4" style="color:#006633; font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;">Gallery</h1>
<ul>

<li class="style5"><a href="online.php" class="style11" style="color:#006633">Vehicle </a></li>
<li class="style7 style5"><a href="#" class="style10" style="color:#006633">Hotel</a></li>
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
                  
                  <?php include("footer.php");?>
</body>

</html>
