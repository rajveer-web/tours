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
.style1 {
	font-size: 9px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style4 {font-size: 13px; }
.style11 {color: #006633; font-size: 12px; }
.style12 {
	font-size: 12px;
	color: #006633;
}
.style15 {font-size: 14px}
.style17 {
	font-size: 14px;
	color: #006633;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="header">
<div id="logo">
<label>
      <input type="image" name="imageField2" id="imageField" src="images/logoo.png" />
    </label>
</div>
<div id="splash">
<input type="image" src="images/banner.jpg" align="left" height="266px" width="754"/> 
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
                        <a href="uttarkand.php">UTTARKHAND</a>                                          </div>
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
<?php include('conn.php');?>
<?php
$message="";
/*Here we are going to declare the variables*/
if(isset($_POST['insert']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$res="insert into test(name,email,comment)values('$name','$email','$comment')";

if(!mysql_query("$res"))
{
die("error".mysql_error());
}
//header("location:thank.php");

$message= "Thank You!";
}
?>

<div class="message" style=" text-align:center" ><?php if($message!="") { echo $message; } ?></div>

<div id="page">
<div id="sidebar">
<table cellspacing="5" background="images/background-2.jpg">
<td colspan="2">
  <div class="style17" >Comments and Responses</div></td>

<form action="#" method="post">
<tr>
<th class="style7 style12">NAME</th>
<td><input name="name" type="text"/></td></tr>


<tr>
<th class="style12">EMAIL</th>
<td><input name="email" type="text"/></td>
</tr>


<tr>
<th><span class="style11">COMMENT</span></th>
<td><textarea name="comment" cols="15" rows="5"></textarea></td>
</tr>


<tr>
<td align="center" colspan="2"><input type="submit" value="SUBMIT" style="background-color:#450100; color:#FFFFFF" name="insert" /><input type="reset" value="Clear"/></td>
</tr>
</form>
</table>

</div>
<div align="center">
<div id="content">
<div class="post">

<?php include("fetch.php");?>

</div>
</div>
</div>
</div>

<?php
include("footer.php");
?>
<!--end footer -->

</body>
</html>
