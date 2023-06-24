<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<br>
<br>
<br>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:30px; color:#09F"><b>Category</b></td></tr>
<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:500px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Welcome to <span style="color: orange;">Shree Ram</span> <span style="color: maroon;">Tours and Travels Agency</span></td></tr>
<tr><td class="paraText" width="900px">Welcome to our premier tours and travels website! We are a leading travel agency dedicated to curating extraordinary journeys for wanderlust seekers like you. Immerse yourself in captivating destinations, from the bustling streets of vibrant cities to the tranquil beauty of breathtaking landscapes. Explore diverse cultures, taste mouthwatering cuisines, and engage in thrilling activities that will leave you with unforgettable memories. Our expert team designs customized itineraries, ensuring every detail is taken care of, be it transportation, accommodations, or knowledgeable guides. With our commitment to excellence, we strive to provide seamless and stress-free experiences, allowing you to fully immerse yourself in the wonders of travel. Discover the world with us and let your travel dreams come true. Start your adventure today and create cherished moments that will last a lifetime!.
</td><td style="background-image:url(); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="500px" height="150px" >< &nbsp;&nbsp;&nbsp; </div	></td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>