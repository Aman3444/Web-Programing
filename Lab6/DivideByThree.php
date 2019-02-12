<html>
	<head>		
			<title> CST8238 - Lab 6 </title>
	</head>
			
		<body>
		
		<?php include 'Header.php';?>
		
		<?php include 'Menu.php';?>
		
		<?php include 'Footer.php';?>
		
			<div id="content">
				<h1 style="font-size:30px;"> DivideByThree </h1>
				<?php
					echo "<br/>";
					$bottle = "99";
					while($bottle>0){
						if($bottle%3==0){
							echo "$bottle bottles of beer is a multiple of 3...";
						}
						else{
							echo "$bottle bottles of beer is NOT a multiple of 3...";
						}
						echo "<br/>";
						$bottle = $bottle - 1;
					}
				?>
			
			<br><br><br><br><br><br>
			</div>
			</body>		
</html>
	