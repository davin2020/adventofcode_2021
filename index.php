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

		$firstInput = "
forward 5
down 5
forward 8
up 3
down 8
forward 2";  
		$result = $boiler->calculateResult($firstInput);
		print_r('Result is: ' . $result);



		?>

		</pre>

	</body>
</html>
