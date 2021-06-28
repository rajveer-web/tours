<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>north tour and travel</title></head>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="ddmenu/ddmenu.js" type="text/javascript"></script>

<style type="text/css">
<!--
.style2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style6 {font-size: 24px}
.style7 {color: #006633}
.style8 {
	font-size: 10px;
	color: #006633;
}
.style9 {font-weight: bold}
.style10 {
	font-size: 10px;
	font-weight: bold;
}
-->
</style>
<!-- fancy box-->

	<!-- Add jQuery library -->
	<script type="text/javascript" src="fancybox/js/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancybox/js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancybox/js/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/js/jquery.fancybox.css?v=2.1.5" media="screen" />


	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			
			


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

			</style>



<body>
<div id="page">
<div id="header">
<div id="logo">
<label>
      <input type="image" name="imageField2" id="imageField" src="images/logoo.png" />
    </label>
</div>
<div id="splash">
<input type="image" src="images/indiaTourPackages.jpg" align="left" height="266px" width="754"/> 
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
                        <a href="uttarkand.php">UTTARKHAND</a>                                            </div>
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
<hr /></div>
<div id="page">
<table border="0">
<?php include('conn.php')?>
<?php 
$select="select * from carpic ";
$i=0;
$query1=mysql_query($select);
while($fetch=mysql_fetch_array($query1))
{
?>
</table>
<tr>
<td><a class="fancybox" style=" margin-left:5px;"  href="admin/photo/<?php echo $fetch['photo']; ?>" data-fancybox-group="gallery"><img width="230" height="150" style="margin-top:30px;" align="baseline" src="admin/photo/<?php echo $fetch['photo']; ?>"/></a></td>

<?php 
 $i++;
 if($i%3=='0')
  { 
  echo"</td><td>";  
 
  } 
   
  ?>


<?php
}
?>
</div>
<?php include("footer.php");?>


</body>
</html>
