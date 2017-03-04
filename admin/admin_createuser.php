<?php
	require_once("phpscripts/init.php");
	//confirm_logged_in();

	//str_shuffle() -> Randomly shuffle all characters of a string
	$uppers = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
	$lowers = str_shuffle('abcdefghijklmnopqrstuvwxyz');
	$numbers = str_shuffle('1234567890');
	$specials = str_shuffle('!@#$%&*');
	//substr() -> returns a part of a string. length(-2) -> get 2 characters of end of all characters.
	$complex_password = substr($uppers,-2).substr($lowers,-2).substr($numbers,-2).substr($specials,-2);
	$more_complex_password = str_shuffle($complex_password);

	if(isset($_POST['submit'])) {
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = $more_complex_password;
		//$hash = password_hash($password, PASSWORD_DEFAULT); 
		$email = trim($_POST['email']);
		$level = $_POST['lvllist'];
		if(empty($level)) {
			$message = "Please select a user level.";
		}else{
			//echo "all good...";
			$result = createUser($fname, $lname, $username, $password, $email, $level);
			$message = $result;
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
		<title>Chantry Island - Create User Page</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet" type="text/css">
		<link href="../css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Create User Page</h1>
	<?php
		include("../includes/admin_header.html");
	?>
	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[../images/homeBg-S.jpg, small], [../images/homeBg-M, medium], [../images/homeBg-L.jpg, large]">
			<h2 class="hidden">SignIn Header</h2>
			<div class="small-12 columns adminBar">
				<a href="admin_login.php">Adminstrative SIGN-IN</a>
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

	        <div class="small-10 small-centered medium-8 medium-centered large-8 large-centered createUser">
				<?php if(!empty($message)){echo $message;} ?>
				<form action="admin_createuser.php" method="post" id="userForm">
					<h2>CREATE USER</h2>
					<p>Please sign up to manage this website.</p>
					<label>First Name:</label>
					<input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>">
					<label>Last Name:</label>
					<input type="text" name="lname" value="<?php if(!empty($lname)){echo $lname;} ?>">
					<label>Username:</label>
					<input type="text" name="username" value="<?php if(!empty($username)){echo $username;} ?>">
					<label>Email:</label>
					<input type="email" name="email" value="<?php if(!empty($email)){echo $email;} ?>">
					<select name="lvllist">
						<option value="">Please select a user level...</option>
						<option value="2">Web Admin</option>
						<option value="1">Web Master</option>
					</select>
					<br><br>
					<button name="submit" type="submit" data-submit="...Sending">Create User</button>
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