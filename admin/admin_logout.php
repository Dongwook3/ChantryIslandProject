<?php
	require_once('phpscripts/init.php');
	//include('phpscripts/greet.php');
	//confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio - Logout</title>
<link href="https://fonts.googleapis.com/css?family=Lobster|Poppins" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/foundation.css" rel="stylesheet">
</head>

<body>
	<div class="container">
    	<h1 class="hidden">Portfolio - Logout</h1>
    	<?php
			include("includes/nav.html");
		?>

        <div id="logoutBox" class="small-12 large-12 large-centered content row">
        	<div class="mySlides" data-interchange="[images/contactSlide-S.jpg, small], [images/contactSlide-M.jpg, medium], [images/contactSlide-L.jpg, large]">
          		<div class="small-12 small-center large-12 large-centered columns logoutBoxText">
                	<h2>Logout Successful!!</h2>
                </div>
          	</div>
        </div>

        <div id="logoutForm" class="small-10 small-centered medium-8 medium-centered large-8 large-centered">
			<p>Last logout: 
				<?php 
					$date=getdate(date("U")); 
					echo "$date[weekday], $date[month] $date[mday], $date[year]     $date[hours]:$date[minutes]:$date[seconds]"; 
				?>
			</p> 
			<!--getdate() = returns date/time information of a timestamp or the current local date/time.-->
			<!--http://www.w3schools.com/php/func_date_getdate.asp-->
			<a href="admin_login.php">Sign In</a>
		</div>
		<?php
			include("includes/footer.html");
		?>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>