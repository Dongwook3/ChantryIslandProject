<?php
	date_default_timezone_set("America/Toronto");

	//Get time, http://www.w3schools.com/php/func_date_date.asp
	$current_time = date(G);

	if ($current_time >= 12 && $current_time <= 16) { //12PM - 4PM & message
		echo "<h1>Good Afternoon!</h1>";
	} elseif ($current_time >= 17 && $current_time <= 24) { //5PM - 11PM & message
		echo "<h1>Good Evening!</h1>";
	} elseif ($current_time >= 1 && $current_time <= 5) { //00AM - 05AM & message
		echo "<h1>Good Night!</h1>";
	} elseif ($current_time >= 6 && $current_time <= 11) { //6AM - 11AM & message
		echo "<h1>Good Morning!</h1>";
	} else {
		echo "<h1>I don't know what time is it?</h1>";
	}
?>