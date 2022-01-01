<?php declare(strict_types=1);

class BoilerPlate
{
 
	public function addSomething(int $a, int $b): int
	{	
		return ($a + $b);
	}
 
	//split on newline
	// $skuList = explode(PHP_EOL, $_POST['skuList']);
	// $skuList = preg_split('/\r\n|\r|\n/', $_POST['skuList']);
	// function formatter_split($val, $delimiter) {
	// 	return explode(strval($delimiter), strval($val));
	// }
	// function formatter_splitme($val) {
	// 	return preg_split('/\n|\r\n?/', $val);
	// }

	public function calculateFinalPosition($inputString): int
	{	
		//read in file or string and parse contents eg explode on newline and space

		//read in file or string and parse contents eg explode on newline and space
		$inputArray = explode(PHP_EOL, $inputString);
		print_r('<br> inputArray: ');
		print_r($inputArray);

		//put contents in array of action and amount values

		//setup vars
			$horizontalPosition = 0;
			$depth = 0;

			$instructionArray = array();
			// array will end up looking like this
			// [0] => Array
		 //        (
		 //            [0] => forward
		 //            [1] => 5
		 //        )

		 //    [1] => Array
		 //        (
		 //            [0] => down
		 //            [1] => 5
		 //        )
			
			// $data = array();
			foreach ($inputArray as $lineItem) {
				$actionAndAmountArray = explode(" ", $lineItem);
				print_r('<br> actionAndAmountArray: ');
				print_r($actionAndAmountArray);
				//ths gives me a nested array, instead of an assocArray, BUT DOES ACTUALY WORK!
				array_push($instructionArray, $actionAndAmountArray);
			}
			print_r('<br> horizontalPosition: ' . $horizontalPosition);
			print_r('<br> depth: ' . $depth);

			print_r('<br> instructionArray after push: ');
			print_r($instructionArray);

			//increment vars according to action in [0] and amount in [1] position of nested array inside instructionArray
			for ($i=0; $i<count($instructionArray); $i++) {
				if ($instructionArray[$i][0] == 'forward') {
					$horizontalPosition += $instructionArray[$i][1];
				}
				else if ($instructionArray[$i][0] == 'down') {
					$depth += $instructionArray[$i][1];
				}
				else if ($instructionArray[$i][0] == 'up') {
					$depth -= $instructionArray[$i][1];
				}
			}

			print_r('<br> AFTER FOR LOOP: ' );
			print_r('<br> horizontalPosition: ' . $horizontalPosition);
			print_r('<br> depth: ' . $depth);

			// //multiply horiz by depth
			$finalResult = $horizontalPosition * $depth;
			return $finalResult;

	}
}
