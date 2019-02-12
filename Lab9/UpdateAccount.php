<?php
session_start();

$host = "localhost";
$username = "multcom_user";
$password = "aman@@user";
$database = "multcom_CST8238";


$_SESSION["updatefname"] = $_SESSION["updatelname"] = $_SESSION["updatepnum"] = $_SESSION["updateemail"] = $_SESSION["updatedesi"] = $_SESSION["updateadm"] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $_SESSION["updatefname"] = $fname = $_POST["updatefname"];
  $_SESSION["updatelname"] = $lname = $_POST["updatelname"];
  $_SESSION["updatepnum"] = $pnum = $_POST["updatepnum"];
  $_SESSION["updateemail"] = $email = $_POST["updateemail"];
  $_SESSION["updatedesi"] = $desi = $_POST["updatedesi"];
  $_SESSION["updateadm"] = $adm = $_POST["updateadm"];

  $conn = mysql_connect($host, $username, $password);

  if (!$conn)
  {
    die("Cannot connect to database $host");
  }
  
  mysql_select_db($database);

  $sql = "UPDATE Employee SET FirstName  = '".$_POST["updatefname"]."', LastName = '".$_POST["updatelname"]."', TelephoneNumber = '".$_POST["updatepnum"]."', EmailAddress = '".$_POST["updateemail"]."', Designation = '".$_POST["updatedesi"]."', AdminCode = '".$_POST["updateadm"]."' WHERE EmployeeID = ".$_SESSION["update"]."";

  $retval = mysql_query($sql);

  if (!$retval)
  {
    die("Error: " . $sql . "<br>" . mysql_error($conn));
  }

  mysql_close($conn);
  
  $_SESSION["valid_login"];
  header('Location: UpdateComplete.php');
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
		
		echo '<h1>Update account</h1>';
		echo '<br><br>Please fill in all informatiion<br>';
		
		echo '<table align="center">';
		
        echo '<form method="post">';
		
		echo '<tr>';
        echo '<th>First Name</th>';
		echo '<td><input required maxlength="50" type="text" name="updatefname"></td>';
		echo '</tr>';
		
		echo '<tr>';
        echo '<th>Last Name</th>';
		echo '<td><input required maxlength="50" type="text" name="updatelname"><br></td>';
		echo '</tr>';
		
		echo '<tr>';
        echo '<th>Email</th>';
		echo '<td><input required maxlength="255" type="email" name="updateemail"><br></td>';
		echo '</tr>';
				
		echo '<tr>';
        echo '<th>Phone Number</th>';
		echo '<td><input required type="tel" name="updatepnum"><br></td>';
		echo '</tr>';

		echo '<tr>';
		echo '<th>Designation</th>';
		echo '<td><input required maxlength="60" type="text" name="updatedesi"><br></td>';
		echo '</tr>';
				
		echo '<tr>';
		echo '<th>Admin Code </th>';
		echo '<td><input required maxlength="60" type="text" name="updateadm"><br></td>';
		
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
