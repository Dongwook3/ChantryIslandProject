<?php
	require_once("admin/phpscripts/init.php");

	if(isset($_POST['name'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['msg'];
		$direct = "thankyou.php";
		sendMessage($name, $email, $phone, $subject, $message, $direct);
	}
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
		<!-- in mobile set initial zoom level of page to 100%, set site size to equal to device width -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chantry Island - Contact</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Contact</h1>
	<?php
		include("includes/header.html");
	?>

	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[images/contactBg-S.jpg, small], [images/contactBg-M, medium], [images/contactBg-L.jpg, large]">
			<h2 class="hidden">Booking &amp; Navigation</h2>
			<div class="small-12 columns adminBar">
				<a href="admin/admin_login.php">Adminstrative SIGN-IN</a>
			</div>
        	<nav class="small-12 large-12 columns">
            	<h2 class="hidden">Main Navigation</h2>
                <?php
                	include("includes/nav.html");
                ?>
                <?php
                	include("includes/book.html");
                ?>
            </nav>   
        </div>
        
        <div class="bodyCon">
			<div class="headSpace">
				<ul class="conNav">
                    <li><a href="">519-797-5862</a></li>
					<li><a href="">Free 1-866-797-5862</a></li>
                </ul>
			</div>
			<div class="subMenu">
                <ul class="subNav">
                    <li><a href="contact.php">Contact</a></li>
					<li><a href="maps.php">Maps</a></li>
                </ul>
            </div>
			<div id="contactForm" class="small-10 small-centered medium-8 medium-centered large-8 large-centered">
				<form method="post" id="contact">
					<h2>Contact</h2>
					<p>We will get in touch with you shortly.</p>
					<label>Name:</label>
					<input name="name" type="text" placeholder="Your Fullname">

					<label>Email:</label>
					<input name="email" type="email" placeholder="e.g. example@example.ca">   

					<label>Phone Number:</label>
					<input name="phone" type="tel" placeholder="e.g. xxx-xxx-xxxx">

					<label>Subject:</label>
					<input name="subject" type="text" placeholder="Subject">

					<label>Message:</label>
					<textarea name="msg" placeholder="Type your Message Here..."></textarea>

					<button name="submit" type="submit" data-submit="...Sending" id="contactSubmit">Send</button>
				</form>
			</div>
			<div id="contactMaps" class="small-10 small-centered columns row">
				<div class="small-12 columns">
					<div class="small-12 medium-6 columns contactChantry">
						<h2>Contact</h2>
						<h3>Call: 519-797-5862</h3>
						<h3>Toll: Free 1-866-797-5862</h3>
					</div>
					<div class="small-12 medium-6 columns mailingChantry">
						<h2>Mailing Address</h2>
						<h3>Marine Heritage Society</h3>
						<p>86 Saugeen St.<br>Southampton, Ontario<br>Canada N0H 2L0</p>
					</div>
				</div>
			</div>
		</div>
		<div class="small-12 columns row sponcer">
        	<div class="small-6 medium-4 large-2 large-offset-1 columns sponPlace">
        		<a href="http://www.saugeenshores.ca/en/index.asp" title="The Saugeen Shores website is shared between the municipality and the local Chamber of Commerce. Let this website help you plan your visit when you come to tour Chantry Island.">
        			<img src="images/sponcer1.jpg" alt="sponcer1" class="sponImg">
        		</a>
				<p>The Saugeen Shores</p>
			</div>
			<div class="small-6 medium-4 large-2 columns sponPlace">
				<a href="http://www.brucemuseum.ca/" title="The Bruce County Museum and Cultural Centre offers a journey through thousands of years of natural and human history. Check out their awesome Marine Gallery.">
        			<img src="images/sponcer2.jpg" alt="sponcer2" class="sponImg">
        		</a>
				<p>The Bruce County Museum and Cultural Centre</p>
			</div>
			<div class="small-6 medium-4 large-2 columns sponPlace" title="Enjoy the Bruce Coast Lighthouse tour.">
				<a href="http://www.brucecoastlighthouses.com/">
        			<img src="images/sponcer3.jpg" alt="sponcer3" class="sponImg">
        		</a>
				<p>the Bruce Coast Lighthouse tour</p>
			</div>
			<div class="small-6 medium-4 large-2 columns sponPlace" title="Explore the Bruce is the Official Travel web site of Bruce County, one of the most spectacular all season destinations in Ontario. Check out this link for more Lighthouse Destinations.">
        		<a href="http://explorethebruce.com/">
        			<img src="images/sponcer4.jpg" alt="sponcer4" class="sponImg">
        		</a>
				<p>Explore the Bruce</p>
			</div>
			<div class="small-6 small-pull-6 medium-4 medium-pull-4 large-2 large-pull-1 columns sponPlace">
				<a href="http://www.southamptontennisclub.ca/" title="The Southampton Tennis Club is a thriving seasonal tennis club on the sunny shores of Lake Huron. Visit our website for more information.">
        			<img src="images/sponcer5.jpg" alt="sponcer6" class="sponImg">
        		</a>
				<p>The Southampton Tennis Club</p>
			</div>
		</div>
        <?php
        	require_once("includes/footer.html");
        ?>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
