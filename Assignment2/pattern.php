<!DOCTYPE html>
<html>

<body>
    <?php
		$a = 1;
		$b = 9;
		do {
			echo str_repeat(" &nbsp;", $b);
			echo str_repeat("*", $a);
			echo "<br>";
			$a++;
			$a++;
			$b--;
		} while ($a < 12);

		$a = 11;
		$b = 4;
		do {
			echo str_repeat(" &nbsp;", $b);
			echo str_repeat("*", $a);
			echo "<br>";
			$a--;
			$a--;
			$b++;
		} while ($a > 0);

		?>
	  
</body>
</html>