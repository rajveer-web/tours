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
.style4 {
	font-size: 16px;
	font-weight: bold;
	color: #006633;
}
.style6 {font-size: 10px}
.style7 {color: #006633}
.style9 {font-weight: bold}
.style12 {color: #006633; font-size: 16px; }
.style13 {font-size: 16px}
.style15 {font-size: 16px; font-weight: bold; }
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
<input type="image" src="images/uttarakhand-banner-4.jpg" align="left" height="266px" width="754"/> 
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
<!-- start page -->
<div id="page"><!-- start content -->
<div id="page"><!-- start content -->
<?php include('conn.php');?>
<?php
	  $query=mysql_query("select * from ukand");
	  while($rows=mysql_fetch_array($query)){
?>
      <a href="ukand.php?id=<?php echo $rows['id'] ; ?>">
      <div class="div"><table width="176" height="206"  class="tb">
      <tr>
    <td><?php echo $rows['name'] ; ?>
    </td>
  </tr>
  <tr>
    <td ><a href="uttarkhand.php?id=<?php echo $rows['id'] ; ?>"><img src="admin/jammu/<?php echo $rows['photo'] ; ?>" width="155" height="118" class="imgpic"></td></a>
  </tr>
</table>
</div>
      <?php
	  }
      ?>
<!-- end page -->
<?php include("footer.php");?>

</body>
</html>
