<html>
	<body>
		<?php include ("Header.php");?>
		<?php include ("Menu.php");?>
	
		<div id = "content">
			<form action="input.php" method="POST" style="width:60%; float:left";;>
			<fieldset>
				<legend><b>Employee Information</b></legend>
					<br>
					<label>Employee Name: </label>
					<input type="text" name="empname" /><br/>
				
					<label>Employee ID: </label>
					<input type="text" name="empid" /><br/>
		
					<label>Telephone Number: </label>
					<input type="tel" name="telephone" /><br/>
			
					<label>Email Address: </label>
					<input type="text" name="email" /><br/>
			<br>	
				<legend><b>Select Type</b></legend>
					<br>
					<input type="radio" name="where" value="Manager">Manager<br/>
					<input type="radio" name="where" value="Team Lead">Team Lead<br/>
					<input type="radio" name="where" value="IT Developer">IT Developer<br/>
					<input type="radio" name="where" value="IT Analyst">IT Analyst<br/>	
			<br>	
			</fieldset>
			<fieldset>
				<legend><b>Selection Of IT Projects</b></legend>
						<br>
						<label>IT Projects:</label>
						<select name="projects">
							<option></option>
							<option>Project A</option>
							<option>Project B</option>
							<option>Project C</option>
							<option>Project D</option>
						</select>
			<br><br>
				<input type="submit" value="Submit" name="submit">	
			<br><br>
			</fieldset>
			<br><br>
			
			</form>
		</div>
		<div class="output">
			
			<?php
				echo "<br>";
				if(isset($_POST['submit'])){
					if(isset($_POST["empname"])){
						$empname = $_POST["empname"];
						echo "&nbsp;<b> Employee Name : </b>",$empname,"<br/>";
					}else{
						echo "&nbsp; Employee Name was not selected <br/>";
					}
					if(isset($_POST["empid"])){
						$empid = $_POST["empid"];
						echo "&nbsp;<b> Employee ID : </b>",$empid,"<br/>";
					}else{
						echo "&nbsp; Employee ID was not selected";
					}if(isset($_POST["telephone"])){
						$telephone = $_POST["telephone"];
						echo "&nbsp;<b> Telephone Number : </b>",$telephone,"<br/>";
					}else{
						echo "&nbsp; Telephone was not selected <br/>";
					}if(isset($_POST["email"])){
						$email = $_POST["email"];
						echo "&nbsp;<b> Email Address : </b>",$email,"<br/>";
					}else{
						echo "&nbsp; Email Address was not selected <br/>";
					}if(isset($_POST["where"])){
						$where = $_POST["where"];
						echo "&nbsp;<b> Type : </b>",$where,"<br/>";
					}else{
						echo "&nbsp;<b> Type: </b><br/>";
					}if(isset($_POST["projects"])){
						$projects = $_POST["projects"];
						echo "&nbsp;<b> Project : </b>",$projects,"<br/>";
					}else{
						echo "&nbsp; Project was not selected <br/>";
					}
				}
				echo "<br><br><br>";
			?>
			
		</div>
		<?php include 'Footer.php'; ?>
	</body>
</html>
