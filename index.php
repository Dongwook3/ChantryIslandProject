<?php
	require_once("admin/phpscripts/init.php");
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
		<!-- in mobile set initial zoom level of page to 100%, set site size to equal to device width -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chantry Island - Home</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Home</h1>
	<?php
		include("includes/header.html");
	?>

	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[images/homeBg-S.jpg, small], [images/homeBg-M, medium], [images/homeBg-L.jpg, large]">
			<h2 class="hidden">Booking &amp; Navigation</h2>
			<div class="small-12 columns adminBar">
				<a href="admin/admin_login.php">Adminstrative SIGN-IN</a>
			</div>
        	<nav class="small-12 large-12 columns">
            	<h2 class="hidden">Main Navigation</h2>
                <?php
                	include("includes/nav.html");
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

			<div id="homeCont" class="small-10 small-centered columns row">
				<div class="small-12 medium-9 columns marineHeritage">
					<h2>Marine Heritage Society</h2>
					<p>The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors. They are also winner of the 2010 Locals Know Canada wide competition. Among other projects, the Society manages the Chantry Island Light Station under agreements and restrictions from the Canadian Coast Guard and the Canadian Wildlife Service.</p>
				</div>
				<div class="small-12 medium-3 columns">
					<img src="images/MHS_logo.png" alt="logo">
				</div>
			</div>
			<div id="touringChantry" class="small-10 small-centered columns row">
				<div class="small-12 columns">
					<h2>Touring Chantry Island</h2>
				</div>
				<div class="small-12 medium-12 large-4 columns touringImage">
					<img src="images/touring1.jpg" alt="touring1">
					<span class="photo">Photo by Vicki Tomori</span>
				</div>
				<div class="small-12 medium-12 large-8 columns">
					<p>As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island. Stroll back in time while visiting the Light Keeper's Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds.</p>
					<div class="small-12 medium-6 columns">
						<img src="images/touring2.jpg" alt="touring2">
						<span class="photo">Photo by George Plant</span>
					</div>
					<div class="small-12 medium-6 columns">
						<img src="images/touring3.jpg" alt="touring3">
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
