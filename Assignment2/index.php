<!DOCTYPE html>
<html>
<link href="css/style.css" rel="stylesheet" type="text/css">

<?php
		include("header.php");	
	?>
<div id="content" class="clearfix">
    <aside>
        <?php
			echo '<h2><center>'.date( "l" ). "'s Special".'</h2></center>';?>
            <hr>
            <img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
            <h3>The WP Burger</h3>
            <p>Freshly made all-beef patty served up with homefries - $14</p>
            <hr>
            <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
            <h3>WP Kebobs</h3>
            <p>Tender cuts of beef and chicken, served with your choice of side - $17</p>
            <hr>
            <h2>Private Dining</h2>
            <img src="images/dining_room_sm.jpg" width="228" alt="Dining Room" title="The WP Eatery Dining Room">
            <p>Call us to find out more about our private dinning options.</p>
    </aside>

    <div class="main">
        <h1>Welcome to WP Eatery!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        <h3>Upcoming Events ...</h3>

        <?php 
		include ("class_lib.php");
		$inst = new EventItem("Birthday Party ","Date: December 15th","Time: 10 AM","Price: $30","Join us at the party, For food, music, gifts, drinks and much more. <br>");
		$inst->printMenu();
		echo "<br>";
		$inst = new EventItem("New Year Bash", "Date: January 1st","Time: 12 AM", "Price: $35","Join us at the party, For dance, music, food and drinks.");
		$inst->printMenu();
		?>
        </strong>
        <h2>Book your Private Party!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam.</p>
    </div>
    <!-- End Main -->
</div>
<!-- End Content -->
<?php
		include("footer.php");
	?>
</body>

</html>