<?php
	require_once('phpscripts/init.php');
	//include('phpscripts/greet.php');
	//confirm_logged_in();
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
		<!-- in mobile set initial zoom level of page to 100%, set site size to equal to device width -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chantry Island - Adminstrative Page</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet" type="text/css">
		<link href="../css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Adminstrative Page</h1>
	<?php
		include("../includes/admin_header.html");
	?>
	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[../images/homeBg-S.jpg, small], [../images/homeBg-M, medium], [../images/homeBg-L.jpg, large]">
			<h2 class="hidden">Logoout Header</h2>
			<div class="small-12 columns adminBar">
				<a href="admin_logout.php">Log Out</a>
			</div>
        	<nav class="small-12 large-12 columns">
                <div class="small-12 columns">
                	<img src="../images/MHS_logo1.png" alt="logo" class="topLogo">
                </div>
                <div class="small-12 columns headBook">
					<h2>Chantry Island Tour</h2>
					</ul>
				</div>
            </nav>   
        </div>
        
        <div class="bodyCon">
			<div class="headSpace"> 
			</div>
			<div id="updateBox" class="small-10 columns row">
				<?php if(!empty($message)) {echo $message;} ?>
				<div class="small-12 medium-5 columns updateForm">
					<form action="admin_updategallery.php" method="post">
						<h2>Update Photos</h2>
						<p>Add your photo. The gallery page is updated.</p>
						<button name="submit" type="submit" data-submit="...Sending">Update Photos</button>
					</form>
				</div>
				<div class="small-12 medium-5 medium-offset-2 columns updateForm">
					<form action="admin_updatenews.php" method="post">
						<h2>Update News</h2>
						<p>Add news. The News page is updated.</p>
						<button name="submit" type="submit" data-submit="...Sending">Update News</button>
					</form>
				</div>
				<div class="small-12 medium-5 columns updateForm">
					<form action="admin_updateevents.php" method="post">
						<h2>Update Events</h2>
						<p>Add new events. The Events page is updated.</p>
						<button name="submit" type="submit" data-submit="...Sending">Update Events</button>
					</form>
				</div>
				<div class="small-12 medium-5 medium-offset-2 columns updateForm">
					<form action="admin_edituser.php" method="post">
						<h2>Edit Account</h2>
						<p>You can modify your information.</p>
						<button name="submit" type="submit" data-submit="...Sending">Edit Account</button>
					</form>
				</div>
			</div>
		</div>
        <?php
        	include("../includes/admin_footer.html");
        ?>
	</div>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/foundation.min.js"></script>
	<script src="../js/navbar.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>