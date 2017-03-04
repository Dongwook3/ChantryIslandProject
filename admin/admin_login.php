<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL); //Report all PHP errors
	
	$ip = $_SERVER["REMOTE_ADDR"]; //IP of user who access the site - IP = XXX.XXX.XXX.XXX

	require_once("phpscripts/init.php");
	
	if(isset($_POST['submit'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);	
		if($username != "" && $password != "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields.";
		}
	}
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
		<!-- in mobile set initial zoom level of page to 100%, set site size to equal to device width -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chantry Island - Admin Login</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet" type="text/css">
		<link href="../css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Admin Login</h1>
	<?php
		include("../includes/admin_header.html");
	?>
	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[../images/homeBg-S.jpg, small], [../images/homeBg-M, medium], [../images/homeBg-L.jpg, large]">
			<h2 class="hidden">SignIn Header</h2>
			<div class="small-12 columns adminBar">
				<a href="admin_createuser.php">SIGN UP</a>
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
			<div id="loginForm" class="small-10 small-centered medium-8 medium-centered large-8 large-centered">
				<?php if(!empty($message)) {echo $message;} ?>
				<form action="admin_login.php" method="post" id="login">
					<h2>Adminstrative SIGN-IN</h2>
					<input name="username" type="text" placeholder="User ID" value="">
					<input name="password" type="password" placeholder="Password" value="">   
					<button name="submit" type="submit" data-submit="...Sending">Login</button>
					<p>If you don't get a Marine Heritage Society ID, <a href="admin_createuser.php">sign up please.</a></p>
				</form>
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
