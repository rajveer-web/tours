<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>north tour and travel</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #c8e6e4;
}
.style1 {font-size: 18px}
-->
</style></head>


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
<div id="header">
<a href="uttarkand.php">BACK</a>
<div id="logo" align="center">
 <label>
      <input type="image" name="imageField2" id="imageField" src="images/logoo.png" />
    </label>
</div></div> 
<div id="page">
<marquee>
<table>
<img src="images/DAL/ut-vof.jpg" width="250" height="150" />
<img src="images/DAL/rajaji.jpg" width="250" height="150" />
<img src="images/DAL/11-9-full-view-of-Naini-lake.jpg" width="250" height="150" />
<img src="images/DAL/Chandi_Devi_Mandir,Haridwar.JPG" width="250" height="150" />
<img src="images/DAL/kempty.jpg" width="250" height="150" />
<img src="images/DAL/shareiq_1362733388.992708.JPG" width="250" height="150" />

</table>
</marquee>
<div id="sidebar">
<ul>
<li class="style9">
<h1 align="center" class="style2 style1" style="color:#006633"> STATE</h1>
<ul class="style3">
<li><a href="jammu.php" style="color:#006633">Jammu And Kashmir</a></li>
<li><a href="himachal.php" style="color:#006633">Himachal</a></li>
<li><a href="punjab.php" style="color:#006633">Punjab</a></li>
<li><a href="delhi.php" style="color:#006633">Dehli</a></li>
<li><a href="up.php" style="color:#006633">Uttar Pradesh </a></li>
<li><a href="uttarkand.php" style="color:#006633">Uttrakhand</a></li>
</ul>
</li>
<li>
<h1 align="center" class="style1 style2" style="color:#006633">Online Booking</h1>
<ul>
<li class="style3"><a href="online.php" style="color:#006633">Vehicle Service</a></li>
<li class="style3"><a href="onhotel.php" style="color:#006633">Hotel</a></li>
</ul>
<h1 align="center" class="style1 style2" style="color:#006633">Gallery</h1>
<ul>
<li><a href="piccar.php" style="color:#006633">Vehicle</a>
<li><a href="pichot.php" style="color:#006633">Hotel</a></li>
</ul>
<h1 align="center" class="style1 style2 style8" style="color:#006633">Rates</h1>
<ul class="style11">
<li><a href="rate.php" style="color:#006633">Vehicle Rates</a>
<li><a href="hrate.php" style="color:#006633">Hotel Rate</a></li>
</ul>
</li>
</ul>
</div>
<!-- end sidebar -->


<table class="desp">
<?php include('conn.php')?>

<?php 
@$id=$_GET['id'];
@$name= $_POST['name'];
@$pack=$_POST['pack'];
@$desp=$_POST['desp'];
@$photo=$_POST['photo'];
$select="select * from ukand where id ='$id'";


$query1=mysql_query($select);
while($info=mysql_fetch_array($query1)) //retrieves value from the database table.
 { 
?>
<div id="page">
<tr><td>Location:<strong><?php echo $info['name'] ; ?></strong></td></tr>
<tr><td>Package:<?php echo $info['pack'] ; ?></td></tr>
 <tr>
   <td><a class="fancybox"   href="admin/jammu/<?php echo $info['photo']; ?>" data-fancybox-group="gallery"><img src="admin/jammu/<?php echo $info['photo'];?> "width=200 height=150"" /></a></td></tr> 
</td><td><?php echo $info['desp'] ; ?></td>
 </tr>

</div>



<?php
}
?>
</table></div>
<?php include('footer.php');?>
</body>
</html>
