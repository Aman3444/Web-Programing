<?php
session_start();

$host = "localhost";
$username = "multcom_user";
$password = "aman@@user";
$database = "multcom_CST8238";

$_SESSION["fname"] = $_SESSION["lname"] = $_SESSION["pnum"] = $_SESSION["snum"] = $_SESSION["pass"] = $_SESSION["email"] = $_SESSION["desi"] = $_SESSION["adm"] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $_SESSION["fname"] = $firstname= $_POST["fname"];
  $_SESSION["lname"] = $lastname = $_POST["lname"];  
  $_SESSION["email"] = $email = $_POST["email"];
  $_SESSION["pnum"] = $pnum = $_POST["pnum"];
  $_SESSION["snum"] = $snum = $_POST["snum"];
  $_SESSION["pass"] = $pass = $_POST["pass"];
  $_SESSION["desi"] = $desi = $_POST["desi"];
  $_SESSION["adm"] = $adm = $_POST["adm"];
  
  $conn = new mysqli($host,$username,$password,$database);

  if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}

  $sql = "INSERT INTO Employee (Firstname,LastName,EmailAddress,TelephoneNumber,SocialInsuranceNumber,Password,Designation,AdminCode) values ('$firstname','$lastname','$email','$pnum','$snum','$pass','$desi','$adm')";
	if($conn->query($sql) == true){
					
	}else{
		echo "Error adding data ".$sql."<br/>".$conn->error;
	}	
	
				
  mysql_close($conn);
  $_SESSION["valid_login"];
  header('Location: ViewAllEmployees.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 9</title>
     <link href="StyleSheet.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php include("Header.php"); ?>
	<?php include("Menu.php"); ?>
    <main>
      <div id="content" align="center">
        <?php
		
		echo '<h1>Create a new account before logging IN. </h1>';
		echo '<br><br>Please fill out all information given  below .<br>';
		
		echo '<table align="center">';
		
        echo '<form method="post">';
		
		echo '<tr>';
        echo '<th>First Name</th>';
		echo '<td><input required maxlength="50" type="text" name="fname"></td>';
		echo '</tr>';
		
		echo '<tr>';
        echo '<th>Last Name</th>';
		echo '<td><input required maxlength="50" type="text" name="lname"><br></td>';
		echo '</tr>';
		
		echo '<tr>';
        echo '<th>Email</th>';
		echo '<td><input required maxlength="255" type="email" name="email"><br></td>';
		echo '</tr>';
				
		echo '<tr>';
        echo '<th>Phone Number</th>';
		echo '<td><input required type="tel" name="pnum"><br></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<th>Social Insurance Number</th>';
		echo '<td><input required maxlength="11" type="text" name="snum"><br></td>';
		echo '</tr>';
				
		echo '<tr>';
        echo '<th>Password</th>';
		echo '<td><input required maxlength="60" type="password" name="pass"><br></td>';
		echo '</tr>';
				
		echo '<tr>';
		echo '<th>Designation</th>';
		echo '<td><input required maxlength="60" type="text" name="desi"><br></td>';
		echo '</tr>';
				
		echo '<tr>';
		echo '<th>Admin Code </th>';
		echo '<td><input required maxlength="60" type="text" name="adm"><br></td>';
		
		echo '</table>';
		
		if($desi == 'Manager'){
			$adm = 999;
		}
		
        echo '<br>';
		
        echo '<br>';
        echo '<input type="submit" value="Submit">';
        echo '</form>';
        ?>
    </div>
    </main>
  </body>
  <?php include("Footer.php"); ?>
</html>
