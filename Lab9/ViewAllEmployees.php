<?php
session_start();

if ($_SESSION ["valid_login"] == False) {
	header ( 'Location: Login.php' );
}

$host = "localhost";
$username = "multcom_user";
$password = "aman@@user";
$database = "multcom_CST8238";


$conn = mysql_connect($host, $username, $password);

if ($conn == FALSE)
{
  die("Cannot connect to database $host");
}

$emailfetch = $_SESSION['email'];

mysql_select_db($database);

$sql = "SELECT * FROM Employee";
$result = mysql_query($sql);

$sqlque = "SELECT * FROM Employee WHERE (EmailAddress = '$emailfetch')";
$query = mysql_query($sqlque);

if ($result == FALSE)
{
  die("Error: " . $sql . "<br>" . mysql_error($conn));
}

mysql_close($conn);
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
      <div id="content" align = "center">
        <?php
		
		while($row = mysql_fetch_assoc($query))
		{
        echo '<h1>You are logged in as this :</h1>';
        echo 'First Name: ' . $row["FirstName"];
        echo '<br>';
        echo 'Last Name: ' . $row["LastName"];
        echo '<br>';
        echo 'Email: ' . $row["EmailAddress"];
        echo '<br>';
        echo 'Telephone: ' . $row["TelephoneNumber"];
        echo '<br>';
        echo 'SIN: ' . $row["SocialInsuranceNumber"];
        echo '<br>';
        echo 'Designation: ' . $row["Designation"];
		}
		
        echo '<br>';
        echo '<br>';

        echo '<h1>You can see see the employee Data : </h1>';
        echo '<table width=100% align="center">';
        echo '<tr>';
        echo '<th>EMPLOYEE ID</th>';
        echo '<th>FIRST NAME</th>';
        echo '<th>LAST NAME</th>';
        echo '<th>EMAIL</th>';
        echo '<th>TELEPHONE</th>';
        echo '<th>SIN</th>';
		echo '<th>DESIGNATION</th>';
        echo '</tr>';
        if (mysql_num_rows($result) > 0)
        {
          while($row = mysql_fetch_assoc($result))
          {
            echo '<tr>';
            echo '<td>' . $row["EmployeeId"] . '</td>';
            echo '<td>' . $row["FirstName"] . '</td>';
            echo '<td>' . $row["LastName"] . '</td>';
            echo '<td>' . $row["EmailAddress"] . '</td>';
            echo '<td>' . $row["TelephoneNumber"] . '</td>';
            echo '<td>' . $row["SocialInsuranceNumber"] . '</td>';
			echo '<td>' . $row["Designation"] . '</td>';
            echo '</tr>';
          }
        }
        echo '</table>';
		
		echo '<br><br><br><br><br><br><br><br>';
        ?>
    </div>
    </main>
  </body>
  <?php include("Footer.php"); ?>
</html>
