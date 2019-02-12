<html>
	<body>
		<?php include("Header.php");?>
		<?php include("Menu.php");?>
		
		<div style="font-size:18px"; id = content>
		
			<?php
				echo "<br><br><br>";
				session_start();
				if(isset($_SESSION["empname"])){
					echo "Employee Name : ",$_SESSION["empname"],"<br/><br/>";
				}else{
					echo "Employee Name was not selected <br/><br/>";
				}
				if(isset($_SESSION["empid"])){
					echo "Employee ID : ",$_SESSION["empid"],"<br/><br/>";
				}else{
					echo "Employee ID was not selected <br/><br/>";
				}
				if(isset($_SESSION["telephone"])){
					echo "Telephone : ",$_SESSION["telephone"],"<br/><br/>";
				}else{
					echo "Telephone was not selected <br/><br/>";
				}
				if(isset($_SESSION["email"])){
					echo "Email Address : ",$_SESSION["email"],"<br/><br/>";
				}else{
					echo "Email Address was not selected <br/><br/>";
				}
				if(isset($_SESSION["where"])){
					echo "Type : ",$_SESSION["where"]," <br/><br/>";
				}else{
					echo "Selection of type was not selected <br/><br/>";
				}
				if(isset($_SESSION["projects"])){
					echo "Selected Project is : ",$_SESSION["projects"],"<br/>";
				}else{
					echo "Project was not selected <br/>";
				}
				echo "<br><br><br><br><br><br>";		
			?>
		</div>
	</body>
	<?php include'Footer.php'; ?>
</html>