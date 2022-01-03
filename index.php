<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Advent of Code 2021 - Day 2</title>
	</head>

	<body>
		<h1>Advent of Code 2021 - Day 2</h1>

		<pre>

		<?php  
		require 'BoilerPlate.php';

		echo '<p>Hello 2021 Advent of Code<p>';
		$boiler = new BoilerPlate();

		$firstInput = "forward 5
down 5
forward 8
up 3
down 8";  
		$result = $boiler->calculateFinalPosition($firstInput);
		print_r('<br><br>The Final Position of Horizontal Position times Depth is: ' . $result);

		?>

		</pre>

	</body>
</html>
