<?php
		session_start();
		if(isset($_POST['submit'])){
			if(isset($_POST['empname'])){
				$_SESSION['empname'] = $_POST['empname'];
				header("Location: Session2.php");	
			}
			if(isset($_POST['empid'])){
				$_SESSION['empid'] = $_POST['empid'];
				header("Location: Session2.php");	
			}
			if(isset($_POST['telephone'])){
				$_SESSION['telephone'] = $_POST['telephone'];
				header("Location: Session2.php");
			}
			if(isset($_POST['email'])){
				$_SESSION['email'] = $_POST['email'];
				header("Location: Session2.php");
			}
			if(isset($_POST['where'])){
				$_SESSION['where'] = $_POST['where'];
				header("Location: Session2.php");	
			}
			if(isset($_POST['projects'])){
				$_SESSION['projects'] = $_POST['projects'];
				header("Location: Session2.php");
			}
		}
		
	?>
<html>
	<body>
			<?php include ("Header.php");?>
			<?php include ("Menu.php"); ?>
		<div id = content>
			<form method="POST";>
				<fieldset>
				<legend><b>Employee Information</b></legend>
				<p>
					<br>
					<label>Employee Name: </label>
					<input type="text" name="empname" /><br/>
				
					<label>Employee ID: </label>
					<input type="text" name="empid" /><br/>
		
					<label>Telephone Number: </label>
					<input type="tel" name="telephone" /><br/>
					
					<label>Email Address: </label>
					<input type="text" name="email" /><br/>
				</p>
				
				<p>
				<label style="align:center";><b> Select Type </b></label><br/><br/>
					<input type="radio" name="where" value="Manager">Manager<br/>
					<input type="radio" name="where" value="Team Lead">Team Lead<br/>
					<input type="radio" name="where" value="IT Developer">IT Developer<br/>
					<input type="radio" name="where" value="IT Analyst">IT Analyst<br/>
				<br>
				</p>
				</fieldset>
				<fieldset>
				<legend><b>Selection Of IT Projects</b></legend>
					<p>
						<br>
						<label>IT Projects:</label>
						<select name="projects">
							<option></option>
							<option>Project A</option>
							<option>Project B</option>
							<option>Project C</option>
							<option>Project D</option>
						</select>
					</p>
				</fieldset>	
				<br><br>
				<input type="submit" value="Submit" name="submit">
				<br><br><br><br>
			
			</form>
		</div>
		<?php include 'Footer.php'; ?>
	</body>
</html>