<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Band Base - User Home</title> 
	<link	href="../static/css/bootstrap.css" rel="stylesheet" />
	<link	href="../static/css/band_home.css" rel="stylesheet" />

	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="../static/js/bootstrap.js"></script>
</head>
<body>

	<?php 

	$bid = $_GET["bid"]; // Get Band ID
	//$band = getbandinfo($bid); //Fetches band information
	$band_name = "The Jane Does";  //$band.name
	$band_rating = "New York, NY"; //$band.loc
	$band_members = array("Bob", "Jimmy", "Carl"); //$band.interests
	$band_influences = array("Dora The Explorer", "Zoidberg", "Mom"); //$band.influences
	$band_soundslike = array("Eazy E", "Coheed and Cambria", "Phish"); //$band.soundslike
	$band_needs = array("Fans", "Money", "Talent"); //$band.needs

	function getbandinfo($bid) {
		// Access database and get information
		$band_table_name = "bands";
		$db_connection = mysql_connect("localhost", "admin", "admin");
		$query = mysql_query("SELECT * from " + $mysql_band_table + " where bid='" + $bid + "'", $db_connection);
		if ($query) {
			return $query;
		} else {
			die('Could not connect: ' . mysql_error());
		}
	}

	?>

	<header>
		<div class="nav-collapse collapse">
			<h1 class="brand">Band Base</h1>
			<ul class="nav">
				<li> <a href="#">Home</a> </li>
				<li> <a href="#">My Bands</a> </li>
				<li> <a href="#">Friends</a> </li>
				<li> <a href="#">Search</a> </li>
			</ul>
		</div>
	</header>

	<div class="container blurb">
		<div class="span3 profile">
				<h2 class="name"> Jane Doe</h2>
				<h2 class="name"> My Bands</h2>
		</div>
		<div class="span1"></div>
		<div class="span10">
			<div class="span5">
				<h2><?php echo $band_name ?> ★★★★☆</h2>
				<img src="http://illbars.com/wp-content/uploads/2012/09/Kanye-West-9-web.jpg">
			</div>
			<div class="span4">	
				<ul class="members">
					<li> <?php echo $band_members[0] ?> </li>
					<li> <?php echo $band_members[1] ?> </li>
					<li> <?php echo $band_members[2] ?> </li>
				</ul>
				
				<p class="about">
					Is the Space Pope reptilian!? I usually try to keep my sadness pent up inside where it can fester quietly as a mental illness. Kif, I have mated with a woman. Inform the men. Daddy Bender, we're hungry. You seem malnourished. Are you suffering from intestinal parasites? I had more, but you go ahead.
				</p>
			</div>
		</div>
		<div class="span5 gigs">
			<h2 class="name">Gigs</h2>
		</div>
		<div class="span6">
			<h2 class="name">Message Us</h2>
			<h3 class="book"> Want to book our band? </h3>
		</div>
	</div>

	<div class="container content">
		<div class="span1">
			<h2 class="name">Videos</h2>
		</div>
		<div class="span3">
			<iframe width="420" height="315" src="http://www.youtube.com/embed/8kyWDhB_QeI" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="span1"></div>
		<div class="span6">
			<p class="viddescrip">Ok, we'll go deliver this crate like professionals, and then we'll go ride the bumper cars. Oh no! The professor will hit me! But if Zoidberg 'fixes' it… then perhaps gifts! Daddy Bender, we're hungry. Wow! A superpowers drug you can just rub onto your skin? You'd think it would be something you'd have to freebase. I usually try to keep my sadness pent up inside where it can fester quietly as a mental illness. Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually! Leela, Bender, we're going grave robbing. No. We're on the top. You guys realize you live in a sewer, right?</p>
		</div>
	</div>

	<div class="container gallery">
		
	</div>

	<div class="container">
		<div class="span3">
			<h2>Influences</h2>
			<ul>
				<li> <?php echo $band_influences[0] ?> </li>
				<li> <?php echo $band_influences[1] ?> </li>
				<li> <?php echo $band_influences[2] ?> </li>
			</ul>
		</div>
		<div class="span3">
			<h2>Sounds Like</h2>
			<ul>
				<li> <?php echo $band_soundslike[0] ?> </li>
				<li> <?php echo $band_soundslike[1] ?> </li>
				<li> <?php echo $band_soundslike[2] ?> </li>
			</ul>
		</div>
		<div class="span3">
			<h2>Looking For</h2>
			<ul>
				<li> <?php echo $band_needs[0] ?> </li>
				<li> <?php echo $band_needs[1] ?> </li>
				<li> <?php echo $band_needs[2] ?> </li>
			</ul>
		</div>
	</div>

	<div class="container">	
		<div class="span4"></div>
		<div class="span4">
			<footer>
				<div id="copytext">&copy; 2012 Band Base, Inc. All Rights Reserved</div>
			</footer>
		</div>
		<div class="span4"></div>
	</div>
</body>
</html>