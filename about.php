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
		<title>Chantry Island - About</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - About</h1>
	<?php
		include("includes/header.html");
	?>

	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[images/aboutBg_S.jpg, small], [images/aboutBg_M, medium], [images/aboutBg_L.jpg, large]">
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
                    <li><a href="about.php">About</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="restoration.php">Restoration</a></li>
                </ul>
            </div>
			<div id="aboutCont" class="small-10 small-centered columns row">
				<div class="small-12 columns">
					<h2>About Chantry Island</h2>
				</div>
				<div class="small-12 medium-5 large-4 columns">
					<img src="images/about1.jpg" alt="about1">
					<span class="photo">photo by Vicki Tomori</span>
				</div>
				<div class="small-12 medium-7 large-8 columns">
					<p>Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800’s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.</p>
				</div>
				
			</div>
			<div id="chantryIsland" class="small-10 small-centered columns row">
				<div class="small-12 medium-12 large-6 columns">
					<h2>Chantry Island</h2>
					<p>Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800’s and early – mid 1900’s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area. The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about 68 acres. In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.</p>
				</div>
				<div class="small-12 medium-12 large-6 columns aboutImage">
					<img src="images/about2.jpg" alt="about2">
					<span class="photo">photo by Karen Smith</span>
				</div>
			</div>
			<div id="lightHouse" class="small-10 small-centered columns row">
				<div class="small-12 columns">
					<h2>The Lighthouse History</h2>
				</div>
				<div class="small-12 medium-12 large-4 columns">
					<img src="images/about3.jpg" alt="about3">
				</div>
				<div class="small-12 medium-12 large-8 columns aboutHistory">
					<p>During the mid 1800’s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859.
The lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the light’s center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal oil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered.</p>
				</div>
			</div>
			<div id="federalBird" class="small-10 small-centered columns row">
				<div class="small-12 medium-12 large-5 columns">
					<h2>Federal Bird Sanctuary</h2>
					<p>In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee. There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night-Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant. Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island. Because the island is a migratory bird sanctuary, the number of people on the island on any given day is strictly limited and tours must be booked through the Chantry Island Tour Base.</p>
				</div>
				<div class="small-12 medium-12 large-7 columns birdImage">
					<img src="images/about4.jpg" alt="about4">
					<span class="photo">photo by Carol Walberg</span>
				</div>
			</div>
			<div id="sunSets" class="small-12 small-centered columns row" data-interchange="[images/about5-S.jpg, small], [images/about5-M, medium], [images/about5-L.jpg, large]">
				<div class="small-6 medium-6 large-6 columns sunsetImage">
					<img src="images/MHS_logo1.png" alt="logo">
					<h2>SUNSET</h2>
					<p>photo by Terry Thomas</p>
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
