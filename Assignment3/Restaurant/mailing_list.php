<?php
include "header.php";

$host = "localhost";
$username = "multcom_eatery";
$password = "aman@@user";
$database = "multcom_eatery";

$error = "";
?>

<div id="content" class="clearfix">

	<div class="main">
	<?php
	
	$connection = mysqli_connect ( $host, $username, $password, $database );
	mysql_select_db($database, $connection);
	
	if (mysqli_connect_errno ()) {
		die ("Failed to connect to the database." );
	}
	
	echo "<h1>Mailing List</h1><br/>";
	echo "<table align='center' cellspacing ='0' border ='1' cellpadding='3' width='100%'>";
	echo "<tr>";
	echo "<th>Full Name</th>";
	echo "<th>Email Address</th>";
	echo "<th>Phone Number</th>";
	echo "<th>Email Hash</th>";
	echo "</tr>";
	
	$result = mysqli_query($connection, "SELECT * FROM mailingList");
	$data = mysqli_num_rows($result);
	
	if (mysqli_num_rows($result) > 0) {
		
		while ( $row = mysqli_fetch_assoc ( $result ) ) {
			echo "<tr>";
			echo "<td>" . $row ["firstName"] . " " . $row ["lastName"] . "</td>";
			
			echo "<td>" . $row ["emailAddress"] . "</td>";
			
			echo "<td>" . $row ["phoneNumber"] . "</td>";
			
			echo "<td>" . $row ["emailHash"] . "</td>";
		
			echo "</tr>";
		}
	} 
	echo "</table>";
	mysqli_close ( $connection );
	
	?>
	
	</div>

</div>

<?php include ("footer.php")?>