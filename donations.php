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
    	<div class="row mainHeader backImages" data-interchange="[images/donationBg-S.jpg, small], [images/donationBg-M, medium], [images/donationBg-L.jpg, large]">
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
			<div id="donation" class="small-10 small-centered columns row">
				<div class="small-12 columns">
					<h2>Donations</h2>
				</div>
				<div class="small-12 medium-12 large-6 columns">
					<img src="images/book1.jpg" alt="book1">
					<span class="photo">Photo by Wayne MacDonald</span>
				</div>
				<div class="small-12 medium-12 large-6 columns">
					<div class="small-12 columns donaChantry">
						<p>We are currently engaged in Fund Raising to support our New Boat, Dock Improvements, and Marine Heritage Projects. We will send a tax receipt for all donations $20 and more. Since 1997 we have had a tremendous amount of support by donations. If you would like to be included <span class="redStrong">please send a cheque or money</span> order to:</p>
					</div>
					<div class="small-12 columns addressChantry">
						<h2>MAILING ADDRESS</h2>
						<h3>Marine Heritage Society</h3>
						<p>86 Saugeen St.<br>Southampton, Ontario<br>Canada N0H 2L0<br><br><span class="redStrong">Please specify your Donation Preference:<br>Chantry Island and/or New Tour Boat</span></p>
					</div>
				</div>
			</div>
			<div id="donorList" class="small-10 small-centered columns row">
				<div class="small-12 columns donorCategory">
					<h2>Donor Category List</h2>
				</div>
				<table class="small-12 small-centered columns level">
					<tr>
					    <th class="level">LEVEL</th>
					    <th class="level">AMOUNT</th>
					</tr>
					<tr>
					  	<td class="cateLevel">Shipmate</td>
					    <td class="cateAmount">$1.00 - 199.00</td>
					</tr>
					<tr>
					    <td class="cateLevel">Lifesaving Crew</td>
					    <td class="cateAmount">$200.00 - 999.00</td>
					</tr>
					<tr>
					  	<td class="cateLevel">Assistant Lighthouse Crew</td>
					    <td class="cateAmount">$1,000.00 - 4,999.00</td>
					</tr>
					<tr>
					    <td class="cateLevel">Lighthouse Keepers</td>
					    <td class="cateAmount">$5,000.00 - 9,999.00</td>
					</tr>
					<tr>
					  	<td class="cateLevel">Captain Lambert's Crew</td>
					    <td class="cateAmount">$10,000.00 - 25,000.00</td>
					</tr>
					<tr>
					    <td class="cateLevel">Queen Victoria's Crew</td>
					    <td class="cateAmount">$25,000.00 plus</td>
					</tr>
				</table>
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