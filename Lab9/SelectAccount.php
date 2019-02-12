<?php
session_start();

if ($_SESSION ["valid_login"] == False) {
	header ( 'Location: Login.php' );
}

$host = "localhost";
$username = "multcom_user";
$password = "aman@@user";
$database = "multcom_CST8238";


if(isset($_POST["update"]))
		{
			$_SESSION["update"] = $update = $_POST["update"];
			header("Location: UpdateAccount.php");
		}


  $conn = mysql_connect($host, $username, $password);

  if ($conn == FALSE)
  {
    die("Cannot connect to database $host");
  }
  
  mysql_select_db($database);

  $sqlquery =  "SELECT * FROM Employee";
  $result = mysql_query($sqlquery);

  if ($result == FALSE)
{
  die("Error: " . $sql . "<br>" . mysql_error($conn));
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
		
		echo '<h3>Choose an account to update : </h3>';
		
		if (mysql_num_rows($result) > 0)
        {
          while($row = mysql_fetch_assoc($result))
          { 
			$update = $row["EmployeeId"];
			echo '<form method = "post">';
			echo '<table align="center">';
			echo '<tr>';
			echo "<td><input type='submit' name='update' value='".$update."'><td>";
            echo '<td>First Name: '.$row["FirstName"].'<td>';
            echo '<td>Last Name: '.$row["LastName"].'<td>';
			echo '</tr>';
			echo '</form>';
          }
        }
        ?>
    </div>
    </main>
  </body>
  <?php include("Footer.php"); ?>
</html>
