<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function sendUserInfo($fname, $lname, $username, $password, $email, $direct) {
		$to = "{$email}, joy3634@gmail.com";
		$subj = "Message from dongwookshin.ca";
		$extra = "Reply to: joy3634@gmail.com";
		$body = "Thank you for signing up!!\n\nYOUR INFORMATION:\n\nFirst Name: {$fname}\nLast Name: {$lname}\nUser Name: {$username}\nPassword: {$password}\nEmail: {$email}\n\n\nwww.dongwookshin.ca/research/admin_login.php";
		$direct = "admin_thankyou.php";
		
		mail($to, $subj, $body, $extra);
		redirect_to($direct);
	}

	function sendMessage($name, $email, $phone, $subject, $message, $direct) {
		$to = "joy3634@gmail.com";//chantryisland@bmts.com
		$subj = "{$subject} - Message from chantryisland.com";
		$extra = "Reply to: {$email}";
		$body = "Message from {$name}\n\nName: {$name}\nEmail: {$email}\nPhone Number: {$phone}\nMessage: {$message}\n\n";
		$direct = "thankyou.php";
		
		mail($to, $subj, $body, $extra);
		redirect_to($direct);
	}
?>