<html>

<head>
    <title>CST8238 - Assignment 2 - Table</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
</head>
<?php
			include("Header.php");
		?>

<body>
    <div id="content">
        <?php
				function IsPrime($n) {
					for($x = 2; $x < $n; $x ++) {
						if ($n % $x == 0) {
							return 0;
						}
					}
					return 1;
				}
				
				echo '<center><table border "1" width ="400">';
				
				$a = 2;
				$c = 0;
				while ( $a < 23 ) {
					$b = 0;
					$c = $c + 3;
					while ( $b !== 1 ) {
						$b = IsPrime ( $a );
						$a ++;
						if ($b == 1) {
							echo '<tr><td>' . ($a - 1) . '</td>';
						}
					}
					if ($c % 3 == 0) {
						echo '<td>' . $c . '</td></tr>';
					}
				}
				echo '</table></center>';
				
				?>
            <br />
            <br />
            <br />
            <br />
            <br />
    </div>
</body>
<?php
			include("Footer.php");
	?>

</html>