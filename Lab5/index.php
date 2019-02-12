<html>
<head>
			<title>Lab 5: PHP</title>
		</head>
	<body>
		<?php
			
			define("Student_Number","040877727");
			$First_Name="Aman";
			$Last_Name="Multani";
			$String="I am using PHP!";



			echo "First Name: ";echo $First_Name;
			echo "<br/>";
			echo "Last Name: ";echo $Last_Name;


			echo "<br/><br/>";
			echo "Student Number: ";echo Student_Number;
			echo "<br/><br/>";
			echo "Hello World!".$String;
			echo "<br/><br/>";
echo "Todays date is " . date('l jS \of F Y h:i:s A');
echo "<br/><br/>";
echo "<br/><br/>";



			echo "These links redirect you to my labs and assignment ";
			echo "<br/><br/>";
			echo '<a href="http://mult0004.com/CST8238/Lab1/index.html">Lab 1</a><br>';
				echo '<a href="http://mult0004.com/CST8238/Lab2/index.html"> Lab 2</a><br>';
				echo '<a href="http://mult0004.com/CST8238/Lab3/index.html"> Lab 3</a><br>';
				echo  '<a href="http://mult0004.com/CST8238/Lab4/index.html">Lab 4 </a><br>';
				echo '<a href="http://mult0004.com/CST8238/Assignment1/index.html"> Assignment 1 </a><br>';
		?>

	</body>
</html>