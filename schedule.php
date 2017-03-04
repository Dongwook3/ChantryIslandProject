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
		<title>Chantry Island - Schedule &amp; Rates</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7cOswald%7cQuestrial" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="css/calendar.css" rel="stylesheet" type="text/css">
		<link href="css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Schedule &amp; Rates</h1>
	<?php
		include("includes/header.html");
	?>

	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[images/bookBg-S.jpg, small], [images/bookBg-M, medium], [images/bookBg-L.jpg, large]">
			<h2 class="hidden">Booking &amp; Navigation</h2>
			<div class="small-12 columns adminBar">
				<a href="admin_login.php">Adminstrative SIGN-IN</a>
			</div>
        	<nav class="small-12 large-12 columns">
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
			<div class="subMenu">
                <ul class="subNav">
                    <li><a href="booking.html">Booking Info</a></li>
					<li><a href="schedule.html">Schedule &amp; Rates</a></li>
                </ul>
            </div>
            <div class="small-10 columns schedule row">
            	<h2>2017 Chantry Island Tours</h2>
            	<p>Please call the Chantry Island Tour Base and Gift Shop phone number to make all tour bookings after May 1.<br><span class="redStrong">519-797-5862  &#47;  1-866-797-5862</span><p>
				<div class="small-12 medium-6 large-4 columns calendar">
		            <h3>May</h3>
		            <table>
		                <tr>
		                	<th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
		                </tr>
		                <tr>
		                	<td class="lastmonth">30</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td>
		                </tr>
		                <tr>
		                	<td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td>
		                </tr>
		                <tr>
		                	<td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td>
		                </tr>
		                <tr>
		                	<td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td class="current hastask">27</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">28</td><td>29</td><td>30</td><td>31</td><td class="nextmonth">1</td><td>2</td><td>3</td>
		                </tr>
		                <tr>
		                	<td class="nextmonth">4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
		                </tr>
		            </table>
		            <p>(Weekend only, 27, 28)<br>Tours leave at: 1:00 pm &#47; 3:00 pm</p>
		        </div>
		        <div class="small-12 medium-6 large-4 columns calendar">
		            <h3>June</h3>
		            <table>
		                <tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr>
		                <tr><td class="lastmonth">28</td><td class="lastmonth">29</td><td class="lastmonth">30</td><td class="lastmonth">31</td><td>1</td><td>2</td><td class="current hastask">3</td></tr>
		                <tr><td class="current hastask">4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td class="current hastask">10</td></tr>
		                <tr><td class="current hastask">11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td class="current hastask">17</td></tr>
		                <tr><td class="current hastask">18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td class="current hastask">24</td></tr>
		                <tr><td class="current hastask">25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td class="nextmonth">1</td></tr>
		                <tr><td class="nextmonth">2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
		            </table>
		            <p>(Weekends only)<br>Tours leave at: 1:00 pm &#47; 3:00 pm</p>
		        </div>
		        <div class="small-12 medium-6 large-4 columns calendar">
		            <h3>July</h3>
		            <table>
		                <tr>
		                	<th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
		                </tr>
		                <tr>
		                	<td class="lastmonth">25</td><td class="lastmonth">26</td><td class="lastmonth">27</td><td class="lastmonth">28</td><td class="lastmonth">29</td><td class="lastmonth">30</td><td class="current hastask">1</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">2</td><td class="current hastask">3</td><td class="current hastask">4</td><td class="current hastask">5</td><td class="current hastask">6</td><td class="current hastask">7</td><td class="current hastask">8</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">9</td><td class="current hastask">10</td><td class="current hastask">11</td><td class="current hastask">12</td><td class="current hastask">13</td><td class="current hastask">14</td><td class="current hastask">15</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">16</td><td class="current hastask">17</td><td class="current hastask">18</td><td class="current hastask">19</td><td class="current hastask">20</td><td class="current hastask">21</td><td class="current hastask">22</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">23</td><td class="current hastask">24</td><td class="current hastask">25</td><td class="current hastask">26</td><td class="current hastask">27</td><td class="current hastask">28</td><td class="current hastask">29</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">30</td><td class="current hastask">31</td><td class="nextmonth">1</td><td>2</td><td>3</td><td>4</td><td>5</td>
		                </tr> 
		            </table>
		            <p>(7 days a week)<br>DURING WEEK, Tours leave at: 1:00 pm &#47; 3:00 pm<br>WEEKENDS, Tours leave at: 9:30 am &#47; 1:00 pm &#47; 3:00 pm</p>
		        </div>
		        <div class="small-12 medium-6 large-4 columns calendar">
		            <h3>August</h3>
		            <table>
		                <tr>
		                	<th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
		                </tr>
		                <tr>
		                	<td class="lastmonth">30</td><td class="lastmonth">31</td><td class="current hastask">1</td><td class="current hastask">2</td><td class="current hastask">3</td><td class="current hastask">4</td><td class="current hastask">5</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">6</td><td class="current hastask">7</td><td class="current hastask">8</td><td class="current hastask">9</td><td class="current hastask">10</td><td class="current hastask">11</td><td class="current hastask">12</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">13</td><td class="current hastask">14</td><td class="current hastask">15</td><td class="current hastask">16</td><td class="current hastask">17</td><td class="current hastask">18</td><td class="current hastask">19</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">20</td><td class="current hastask">21</td><td class="current hastask">22</td><td class="current hastask">23</td><td class="current hastask">24</td><td class="current hastask">25</td><td class="current hastask">26</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">27</td><td class="current hastask">28</td><td class="current hastask">29</td><td class="current hastask">30</td><td class="current hastask">31</td><td class="nextmonth">1</td><td>2</td>
		                </tr>
		                <tr>
		                	<td class="nextmonth">3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
		                </tr>
		            </table>
		            <p>(7 days a week)<br>EVERYDAY, Tours leave at: 9:30 am &#47; 1:00 pm &#47; 3:00 pm</p>
		        </div>
		        <div class="small-12 medium-6 large-4 columns calendar">
		            <h3>September</h3>
		            <table>
		                <tr>
		                	<th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
		                </tr>
		                <tr>
		                	<td class="lastmonth">27</td><td class="lastmonth">28</td><td class="lastmonth">29</td><td class="lastmonth">30</td><td class="lastmonth">31</td><td class="current hastask">1</td><td class="current hastask">2</td>
		                </tr>
		                <tr>
		                	<td class="current hastask">3</td><td class="current hastask">4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
		                </tr>
		                <tr>
		                	<td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td>
		                </tr>
		                <tr>
		                	<td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td>
		                </tr>
		                <tr>
		                	<td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
		                </tr>
		                <tr>
		                	<td class="nextmonth">1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td>
		                </tr>
		            </table>
		            <p>(Sept. 1, 2, 3, 4)<br>Tours leave at: 1:00 pm &#47; 3:00 pm</p>
		        </div>
		        <div class="small-12 medium-6 large-4 columns shopInfo">
		            <h3>Chantry Island Tour Base and Gift Shop</h3>
		            <table>
		                <tr><th>May 27, 28</th><td>12:00 pm ~ 5:30 pm</td></tr>
		                <tr><th>June 3, 4, 10, 11, 17, 18, 24, 25</th><td>12:00 pm ~ 5:30 pm</td></tr>
		                <tr><th>July (7 days a week)</th><td>9:00 am ~ 5:30 pm</td></tr>
		                <tr><th>August (7 days a week)</th><td>9:00 am ~ 5:30 pm</td></tr>
		                <tr><th>September 1, 2, 3, 4</th><td>9:00 am ~ 5:30 pm</td></tr>
		            </table>
		        </div>.
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
