<?php
	function editUser($id, $fname, $lname, $username, $password, $email) {
		include("connect.php");//require_once("connect.php"); X
		$updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}', user_name='{$username}',user_pass='{$password}', user_email='{$email}' WHERE user_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);
		
		if($updatequery) {
			redirect_to("admin_index.php");
		}else{
			$message = "Not going to happen!";
			return $message;
		}
		mysqli_close('$link');
	}

	function getUser($id) { //admin_edituser.php
		require_once("connect.php");

		$userstring = "SELECT * FROM tbl_user WHERE user_id={$id}";
		$userquery = mysqli_query($link, $userstring);
		
		if($userquery) {
			$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_user;
		}else{
			$message = "There was a problem finding your account. Please return all of your access cards to the front desk and get the F out!";
			return $message;
		}
		//create query
		//run query
		//gather object, fetch array
		//return
		//else
		//error message
		//return
		mysqli_close($link);
	}
	
	function createUser($fname, $lname, $username, $password, $email, $level) {//admin_createuser.php
		require_once("connect.php");
		$ip = 0;
		$userstring = "INSERT INTO tbl_user VALUES(NULL, '{$fname}','{$lname}','{$username}','{$password}','{$email}','{$level}','{$ip}')";
		$userquery = mysqli_query($link, $userstring);
		if($userquery) {
			sendUserInfo($fname, $lname, $username, $password, $email, $direct);
		}else{
			$message = "Please try again.";
			return $message;
		}
		mysqli_close($link);
	}
?>