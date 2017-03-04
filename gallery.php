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
		<title>Chantry Island - Gallery</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Gallery</h1>
	<?php
		include("includes/header.html");
	?>

	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[images/galleryBg-S.jpg, small], [images/galleryBg-M.jpg, medium], [images/galleryBg-L.jpg, large]">
			<h2 class="hidden">Social Navigation</h2>
			<div class="small-12 columns adminBar">
				<a href="admin/admin_login.php">Adminstrative SIGN-IN</a>
			</div>
        	<nav class="small-12 large-12 columns">
            	<h2 class="hidden">Main Navigation</h2>
                <?php
                	include("includes/nav.html");
                ?>
                <div class="small-12 columns headBook">
					<h2>The Gallery of Chantry Island</h2>
					<p>Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island. If you have photos of Chantry Island that you would like to share with us, connect with our Facebook page.</p>
					<ul class="small-12 small-centered socialIcon">
						<li>
							<a href="https://www.facebook.com/MarineHeritageSociety">
								<img src="images/facebook.svg" alt="facebook" class="icon">
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA?feature=watch">
								<img src="images/youtube.svg" alt="YouTube" class="icon">
							</a>
						</li>
						<li>
							<a href="contact.php">
								<img src="images/email.svg" alt="email" class="icon">
							</a>
						</li>
	  					<li>
	  						<a href="">
	  							<img src="images/tel.svg" alt="telephone" class="icon">
	  						</a>
	  					</li>
					</ul>
				</div>
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
                    <li><a href="gallery.php">Chantry Island</a></li>
					<li><a href="volunteer.php">Volunteers</a></li>
                </ul>
            </div>
			
			<div class="small-10 small-centered columns row gallery">
				<div class="small-12 small-centered columns row">
					<h2>Photo Gallery</h2>
				</div>
				<div class="thumbs">
	           		<ul>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_001.jpg" alt="REPLACE WITH IMAGE TITLE" id="001.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_eggs.jpg" alt="REPLACE WITH IMAGE TITLE" id="eggs.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_003.jpg" alt="REPLACE WITH IMAGE TITLE" id="003.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_004.jpg" alt="REPLACE WITH IMAGE TITLE" id="004.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_005.jpg" alt="REPLACE WITH IMAGE TITLE" id="005.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_006.jpg" alt="REPLACE WITH IMAGE TITLE" id="006.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_007.jpg" alt="REPLACE WITH IMAGE TITLE" id="007.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_008.jpg" alt="REPLACE WITH IMAGE TITLE" id="008.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_009.jpg" alt="REPLACE WITH IMAGE TITLE" id="009.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_010.jpg" alt="REPLACE WITH IMAGE TITLE" id="010.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_011.jpg" alt="REPLACE WITH IMAGE TITLE" id="011.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_012.jpg" alt="REPLACE WITH IMAGE TITLE" id="012.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_013.jpg" alt="REPLACE WITH IMAGE TITLE" id="013.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_014.jpg" alt="REPLACE WITH IMAGE TITLE" id="014.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_015.jpg" alt="REPLACE WITH IMAGE TITLE" id="015.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_016.jpg" alt="REPLACE WITH IMAGE TITLE" id="016.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_017.jpg" alt="REPLACE WITH IMAGE TITLE" id="017.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_018.jpg" alt="REPLACE WITH IMAGE TITLE" id="018.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_019.jpg" alt="REPLACE WITH IMAGE TITLE" id="019.jpg"></li>
	                  	<li class="thumbimg"><img src="images/thumbnails/TH_020.jpg" alt="REPLACE WITH IMAGE TITLE" id="020.jpg"></li>  
           	  		</ul>
           	  	</div>
           	  	<div class="photoDesc">
                	<h3 class="imageName">Aerial View</h3> 
                	<p>Aerial view of Chantry Island and the Saugeen River mouth in Southhampton, Ontario.</p>
                </div>
				<div class="small-12 columns photoGallery">
                	<img class="small-12 small-centered mainImg" src="images/gallerypics/007.jpg" alt="placeholder">
                	<p class="photoCred">Photo by: Karen Smith</p>
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
