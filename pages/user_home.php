<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Band Base - User Home</title> 
	<link	href="../static/css/bootstrap.css" rel="stylesheet" />
	<link	href="../static/css/user_home.css" rel="stylesheet" />

	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="../static/js/bootstrap.js"></script>
</head>
<body>
	
	<?php 
	
	$uid = $_GET["uid"];
	//$user = getuserinfo($uid); //Fetches user information
	$user_name = "Jane Doe";  //$user.name
	$user_location = "New York, NY"; //$user.loc
	$user_interests = array("Food", "Music", "Futurama"); //$user.interests
	
	function getuserinfo($uid) {
		// Access database and get information
		$user_table_name = "users";
		$db_connection = mysql_connect("localhost", "admin", "admin");
		$query = mysql_query("SELECT * from " + $mysql_user_table + " where uid='" + $uid + "'", $db_connection);
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
				<h2 class="name"> <?php echo $user_name ?> </h2>
				<img src="http://www.purplesneakers.com.au/wp-content/uploads/2012/04/diplo.jpg" class="portrait">
		</div>
		<div class="span1"></div>
		<div class="span5">
			<p>No. We're on the top. Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually! Why yes! Thanks for noticing. Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man. Now what?</p>
			<h2 class="title"> Location </h2>
			<iframe width="255" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1245+Sunset+Dr,+Winter+Park,+FL&amp;aq=0&amp;oq=1245&amp;sll=34.360004,-89.523388&amp;sspn=0.079498,0.154324&amp;ie=UTF8&amp;hq=&amp;hnear=1245+Sunset+Dr,+Winter+Park,+Orange,+Florida+32789&amp;t=m&amp;z=14&amp;ll=28.610238,-81.334323&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=1245+Sunset+Dr,+Winter+Park,+FL&amp;aq=0&amp;oq=1245&amp;sll=34.360004,-89.523388&amp;sspn=0.079498,0.154324&amp;ie=UTF8&amp;hq=&amp;hnear=1245+Sunset+Dr,+Winter+Park,+Orange,+Florida+32789&amp;t=m&amp;z=14&amp;ll=28.610238,-81.334323" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		</div>
		<div class="span1"></div>
		<div class="span6">
				<h2 class="title"> Interests </h2>
				<ul>
					<li><?php echo $user_interests[0] ?></li>
					<li><?php echo $user_interests[1] ?></li>
					<li><?php echo $user_interests[2] ?></li>
					<li>Wow! A superpowers drug you can just rub onto your skin? You'd think it would be something you'd have to freebase.</li>
				</ul>
		</div>
	</div>
	
	<div class="container content">
		<div class="span2"></div>
		<div class="span4">
			<img src="http://illbars.com/wp-content/uploads/2012/09/Kanye-West-9-web.jpg">
		</div>
		<div class="span2"></div>
		<div class="span5">
			<p>Ok, we'll go deliver this crate like professionals, and then we'll go ride the bumper cars. Oh no! The professor will hit me! But if Zoidberg 'fixes' it… then perhaps gifts! Daddy Bender, we're hungry. Wow! A superpowers drug you can just rub onto your skin? You'd think it would be something you'd have to freebase. I usually try to keep my sadness pent up inside where it can fester quietly as a mental illness. Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually! Leela, Bender, we're going grave robbing. No. We're on the top. You guys realize you live in a sewer, right?</p>
		</div>
	</div>
	
	<div class="container gallery">
		
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