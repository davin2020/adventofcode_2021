<?php declare(strict_types=1);

class BoilerPlate
{
	public function calculateFinalPosition($inputString): int
	{	
		//take string and parse contents eg explode on newline now and space later
		$inputArray = explode(PHP_EOL, $inputString);
		print_r('<br> inputArray: ');
		print_r($inputArray);

		$horizontalPosition = 0;
		$depth = 0;
		$instructionArray = array();

		//put contents in array of action value ie [0] index, and amount value ie [1] index - tried using assoc array but didnt work as indiv values were added (not appended) to existing keys
		foreach ($inputArray as $lineItem) {
			$actionAndAmountArray = explode(" ", $lineItem);
			// print_r('<br> actionAndAmountArray: ');
			// print_r($actionAndAmountArray);
			array_push($instructionArray, $actionAndAmountArray);
		}
		// nested array will end up looking like this -
		// [0] => Array
		//     (
		//         [0] => forward
		//         [1] => 5
		//     )
		// [1] => Array
		//     (
		//         [0] => down
		//         [1] => 5
		//     )

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

		$finalResult = $horizontalPosition * $depth;
		return $finalResult;
	}

	public function calculatePart2Position($inputString): int {
		//take string and parse contents eg explode on newline now and space later
		print_r('<br> PART 2: ');
		$inputArray = explode(PHP_EOL, $inputString);
		print_r('<br> inputArray: ');
		print_r($inputArray);

		//setup vars
		$horizontalPosition = 0;
		$depth = 0;
		$aim = 0;
		$instructionArray = array();
		
		//put contents in array of action and amount values
		foreach ($inputArray as $lineItem) {
			$actionAndAmountArray = explode(" ", $lineItem);
			array_push($instructionArray, $actionAndAmountArray);
		}
		print_r('<br> horizontalPosition: ' . $horizontalPosition);
		print_r('<br> depth: ' . $depth);

		print_r('<br> instructionArray after push: ');
		print_r($instructionArray);

		//increment vars according to action in [0] and amount in [1] position of nested array inside instructionArray - add in $aim variable according to revised rules
		for ($i=0; $i<count($instructionArray); $i++) {
			$amount = $instructionArray[$i][1];
			if ($instructionArray[$i][0] == 'forward') {
				$horizontalPosition += $instructionArray[$i][1];
				$newAimAmount = $aim * $amount;
				$depth += $newAimAmount;
			}
			else if ($instructionArray[$i][0] == 'down') {
				// $depth += $instructionArray[$i][1];
				$aim += $instructionArray[$i][1];
			}
			else if ($instructionArray[$i][0] == 'up') {
				// $depth -= $instructionArray[$i][1];
				$aim -= $instructionArray[$i][1];
			}
		}

		print_r('<br> AFTER FOR LOOP: ' );
		print_r('<br> horizontalPosition: ' . $horizontalPosition);
		print_r('<br> depth: ' . $depth);
		print_r('<br> AIM: ' . $aim);

		$finalResult = $horizontalPosition * $depth;
		return $finalResult;
	}

}
