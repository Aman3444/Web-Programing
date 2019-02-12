<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 9</title>
        <link href="StyleSheet.css" rel="stylesheet" type="text/css">

  </head>
	<body>
	<?php include("Header.php"); ?>
    <?php include("Menu.php"); ?>
		<div id="content" >
				<h1> Welcome to my Database</h1>
				<h3 style="font-size:30px;"> It is about creating a real time database and adding users to it. </h3>

				<h3 style="font-size:30px;"> This is a Index page. </h3>
				<ul>
				<a href="CreateAccount.php"> <li>CreateAccount </li></a>
				<a href="Login.php"> <li>Login</li> </a>
				<a href="ViewAllEmployees.php"><li>ViewAllEmployees </li></a>
				<a href="SelectAccount.php"><li> SelectAccount</li> </a>
			</ul>
		</div>
		<?php include'Footer.php'; ?>
	</body>
</html>