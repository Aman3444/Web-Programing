<?php
session_start();

$host = "localhost";
$username = "multcom_user";
$password = "aman@@user";
$database = "multcom_CST8238";

$invalid_login = False;
$_SESSION ["valid_login"] = False;

$_SESSION["fname"] = $_SESSION["lname"] = $_SESSION["pnum"] = $_SESSION["snum"] = $_SESSION["pass"] = $_SESSION["email"] = $_SESSION["desi"] = $_SESSION["adm"] =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $_SESSION["email"] = $email = $_POST["email"];
  $_SESSION["pass"] = $pass = $_POST["pass"];
  $_SESSION["adm"] = $adm = $_POST["adm"];

  $conn = mysql_connect($host, $username, $password);

  if ($conn == FALSE)
  {
    die("Cannot connect to database $host");
  }
  
  mysql_select_db($database);

  $sqlquery =  "SELECT * FROM Employee WHERE (EmailAddress = '$email')";
  $result = mysql_query($sqlquery);
  $row = mysql_fetch_assoc($result);
	
	if (mysql_num_rows ( $result ) == 0) {
		$invalid_login = True;
		echo "Email or Password is incorrect.";
	} else if ($row["EmailAddress"] == $email) {
		if ( $pass == $row ["Password"] ) {
			if ( $adm == $row["AdminCode"]){
				$_SESSION ["valid_login"] = True;
				header('Location: SelectAccount.php');
			}
			else {
				$invalid_login = True;
			}
		} else {
		$invalid_login = True;
		echo "Email or Password is incorrect.";
		}
	}

  mysql_close($conn);
  
	if ($_SESSION ["valid_login"] == True) {
		header ( 'Location: SelectAccount.php' );
	}

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
		echo '<table align="center">';
        echo '<form method="post">';
		
		echo '<tr>';
        echo '<td>Email</td>';
		echo '<td><input maxlength="255" type="email" name="email"></td>';
		echo '</tr>';

		echo '<tr>';
        echo '<td>Password</td>';
		echo '<td><input maxlength="60" type="password" name="pass"></td>';
		echo '</tr>';
		
		echo '<tr>';
        echo '<td>Admin Code</td>';
		echo '<td><input maxlength="60" type="text" name="adm"></td>';
		echo '</tr>';
		
        echo '<br>';
        echo '<br>';
		echo '<tr>';
        echo '<td><input type="submit" value="Login"></td>';
        echo '</tr>';
		echo '<br>';
		echo '</table>';
        echo '</form>';
		
		if ($invalid_login == True) {
			echo '<br/>';
			echo 'Invalid Email/Password';
		}
        ?>
    </div>
    </main>
  </body>
  <?php include("Footer.php"); ?>
</html>
