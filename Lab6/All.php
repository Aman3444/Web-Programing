<html>
	<head>		
			<title> CST8238 - Lab 6 </title>
		</head>
		<body>
		
		<?php include 'Header.php';?>
		
		<?php include 'Menu.php';?>
		
		<?php include 'Footer.php';?>
		
			<div id="content">
			<h1 style="font-size:30px;"> The beer Song </h1>
			
			<?php			
				
	$i = 99;
	while ( $i >= 0 ) {
		
		if ($i == 0) {
			echo "There are no more bottles of beer.<br/>";
			break;
		} else {
			
			echo "$i bottles of beer on the wall...<br/>";
			echo "$i bottles of beer...<br/>";
			echo "You take one down you pass it around...<br/>";
			$i --;
			echo "$i bottles of beer on the wall.<br/>";
			echo "<br />";
		}
	}
			?>
			<br><br><br><br><br><br><br><br>
			</div>
		</body>
</html>