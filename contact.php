<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>north tour and travel</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="ddmenu/ddmenu.js" type="text/javascript"></script>

<style type="text/css">
<!--
.style8 {color: #006633}
.style9 {font-size: 14px}
.style10 {
	color: #006633;
	font-size: 14px;
	font-weight: bold;
}
.style11 {
	color: #006633;
	font-weight: bold;
}
.style13 {font-weight: bold}
.style14 {
	font-size: 24px;
	color: #006633;
}
.style15 {font-size: 10px}
a:link {
	text-decoration: underline;
}
a:visited {
	text-decoration: underline;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: underline;
}
.style16 {font-size: 16px}
.style17 {
	font-size: 18px;
	color: #006633;
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
<input type="image" src="images/7.jpg" align="left" height="266px" width="754"/> 
</div>
<nav id="ddmenu">
    
    <ul style="background-image:url(images/img02.jpg)">
        <li class="full-width">
        <li class="no-sub"><a href="index.php" class="top-heading style16">Home</a></li>
<li>
            <span class="top-heading style16">Tour package</span><div class="dropdown">
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
            <span class="top-heading style16">Online booking</span>
			<span class="style15"></span>           
            <div class="dropdown">
                <div class="dd-inner">
<div class="column">
                        <a href="online.php">VEHICLE SERVICES</a>
                        <a href="onhotel.php">HOTEL</a>                                           </div>
      </li>
      <li class="no-sub"><a href="about.php" class="top-heading style16">About</a></li>
      <li class="no-sub"><a href="test.php" class="top-heading style16">Testimonial</a></li>
      <li class="no-sub"><a href="mem.php" class="top-heading style16">Membership</a></li>
      <li class="no-sub"><a href="contact.php" class="top-heading style16">Contact us</a></li>
    </ul>
</nav>
</div>
<hr />
<div id="page">
<div id="sidebar">
<ul class="style8">
<li class="style7 style5">
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

<h1 class="style17"> Get in Touch</h1>
<form name="form1" method="post" action="#">
        <table width="60%" height="176"  cellpadding="2" bordercolor="#006633" border="0">
<tr>
                <td height="45" class="style1 style6"> Name:</td>
<td><input type="text" name="name" id="textfield">
                     
        </td>
            </tr>
<tr>
                <td height="43" class="style1 style6"> Email:</td>
<td><input type="text" name="email" id="textfield">
                     
        </td>
            </tr>
<tr>
                <td height="48" class="style1 style6"> Message:</td>
<td><input type="text" name="comment" id="textfield">
                     
        </td>
            </tr>
<td align="center" colspan="2"><input type="submit" value="SEND" style="background-color:#450100; color:#FFFFFF" name="insert" /><input type="reset" value="Clear"/></td>
</table>
</form>
</li>
</ul>
</div>




<div id="content">
  <div class="post">
  <span class="style14" style="text-align:center">Contact</span>
    <table width="85%" border="0" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td colspan="2" align="center"><div align="left"><span class="style10">Head Office: (punjab)</span></div></td>
      </tr>
      
      <tr>
        <td><span class="style8">Tel :</span></td>
        <td><span class="style8">+91 120 6453634</span></td>
      </tr>
      <tr>
        <td><span class="style8">Fax :</span></td>
        <td><span class="style8">+91 120 6453634</span></td>
      </tr>
      <tr>
        <td><span class="style8">E-mail :</span></td>
        <td><span class="style8">info@northtourismindia.com</span></td>
      </tr>
      
      <tr>
        <td colspan="2"><span class="style8">ONLINE MESSENGER’S</span></td>
      </tr>
      <tr>
        <td> <span class="style8">MSN :</span></td>
        <td><span class="style8">ntpldelhi@hotmail.com</span></td>
      </tr>
      <tr>
        <td><span class="style8"> YAHOO :</span></td>
        <td><span class="style8">tour2india@yahoo.com</span></td>
      </tr>
      </tbody>
  </table>
  <p class="style13"><span class="style8">Braches Offices</span>:</p>
  <table border="0" cellpadding="0" width="495">
    <tr>
      <td width="93"></td>
      <td width="396"></td>
    </tr>
    <tr>
      <td height="140" valign="top"><p class="style8"><strong>Jammu </strong><strong>&amp; Kashmir<br />
        </strong></p>        </td>
      <td><p class="style8">Tourist  Reception Centre<br />
        Vir Marg, Jammu Tawi<br />
        Tel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0191 - 2579554 Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0191 - 2549065<br />
        Email:&nbsp;<u>info</u>@jktdc.co.in</p></td>
    </tr>
    <tr>
      <td valign="top"><p class="style8"><strong>Himachal</strong></p></td>
      <td><p><span class="style8">THE MALL, MANALI -175131<br />
        Tel: (01902) 253531, Fax: (01902) 252325<br />
        E-mail:manali@nitt.in</span> </p></td>
    </tr>
    <tr>
      <td valign="top"><p class="style8"><strong>Uttar Pradesh</strong></p></td>
      <td><p class="style8">Hotel Gomti, 6 Sapru Marg, Lucknow<br />
          <strong>Ph. :</strong>&nbsp;91-522-2615005, 2614284 Fax : 91-522-2612659, 2614708<br />
          <strong>E-mail :</strong>uptourslko@up-tourism.com&nbsp;&nbsp;&nbsp;</p></td>
    </tr>
    
    
    <tr>
      <td valign="top"><p class="style11">Chandigarh </p></td>
      <td><p><span class="style8">INTER STATE BUS TERMINAL, SECTOR-17, CHANDIGARH - 160001<br />
        Tel: (0172) 2707267 FAX: (0172) 2708569<br />
        E-mail:chandigarh@nitt.in</span> </p></td>
    </tr>
    <tr>
      <td valign="top"><p class="style8"><strong>New Delhi</strong> </p></td>
      <td><p><span class="style8">CHANDERLOK BUILDING, 36, JANPATH, NEW DELHI-110001<br />
        Tel: (011) 23325320, 23324764&nbsp; Fax: (011) 23731072<br />
        E-mail:newdelhi@nitt.in</span> </p></td>
    </tr>
    <tr>
      <td height="140" align="center" valign="middle"><span class="style8"><strong>Uttarakhand </strong></span></td>
      <td><p><span class="style8">Pt.Deendayal Upadhaya Paryatan Bhawan <br />
        Near ONGC Helipad,Garhi Cantt. Dehradun-248001(India) <br />
        Tel&nbsp;91- 135-  2559898, 2559987 Fax-&nbsp;+91 -  135 - 2559988 <br />
        E-mail: infoutdb-uk@nic.in </span><br />
        </p></td>
    </tr>
  </table>
  <p align="justify" class="style9 style9" style="color:#006633">&nbsp;</p>
  </div>
  </div>
</div>

<div id="footer">
  <span class="style12 style7"><a href="about.php" class="style8">About us</a> </span><span class="style7">| <a href="contact.php" class="style8">Contact us</a> | <a href="mem.php" class="style8">Membership</a></span>
<p class="style15">
  <span style="color:#006633; font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;"><strong>Copyright © 2015. Design by </strong></span class="style4" style="color:#006633" ><span class="style8">rajveer ,pawan,navjot</span></p>
</div>
</body>
</html>
