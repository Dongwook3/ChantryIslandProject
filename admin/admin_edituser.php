<?php
	require_once("phpscripts/init.php");
	//confirm_logged_in();

	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	$id = $_SESSION['users_creds'];
	$popForm = getUser($id);

	if(isset($_POST['submit'])) {
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		
		$result = editUser($id, $fname, $lname, $username, $password, $email);
		//$message = $result;
	}
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
		<!-- in mobile set initial zoom level of page to 100%, set site size to equal to device width -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chantry Island - Edit Account Page</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet" type="text/css">
		<link href="../css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Edit Account Page</h1>
	<?php
		include("../includes/admin_header.html");
	?>
	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[../images/homeBg-S.jpg, small], [../images/homeBg-M, medium], [../images/homeBg-L.jpg, large]">
			<h2 class="hidden">Logout Header</h2>
			<div class="small-12 columns adminBar">
				<a href="admin_logout.php">Log out</a>
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
			<div>
				<h1>Edit Accout</h1>
				<?php if(!empty($message)){echo $message;} ?>
				<form action="admin_edituser.php" method="post">
					<label>First Name:</label>
					<input type="text" name="fname" value="<?php echo $popForm['user_fname']; ?>">
					<label>Last Name:</label>
					<input type="text" name="lname" value="<?php echo $popForm['user_lname']; ?>">
					<label>Username:</label>
					<input type="text" name="username" value="<?php echo $popForm['user_name']; ?>">
					<label>Password:</label>
					<input type="text" name="password" value="<?php echo $popForm['user_pass']; ?>">
					<label>Email:</label>
					<input type="text" name="email" value="<?php echo $popForm['user_email']; ?>">
					<!--<select name="lvllist">
						<option value="">Please select a user level...</option>
						<option value="2">Web Admin</option>
						<option value="1">Web Master</option>
					</select>-->
					<br><br>
					<input type="submit" name="submit" value="Edit Account">
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