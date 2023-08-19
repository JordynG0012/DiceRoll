<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doll Roll</title>
</head>
<body style ="background-color:yellow;">
	<h1>Dice Roll Game</h1>
	<hr/>
	<?php
		// Global array variable
		$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
		$FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

		// Definition of the CheckForDoubles() function 
		function checkForDoubles($num1, $num2) {
			// let the function grab the global variables
			global $FaceNamesSingular;
			global $FaceNamesPlural;

			// see if$num1 and $num2 are a match
			if($num1 == $num2) {
				echo "<p>The roll double ", $FaceNamesPlural[$num1 - 1], ".</p>";
				return true;
			} else {
				echo "<p>The roll was a ", $FaceNamesSingular[$num1 - 1], " and a ", $FaceNamesSingular[$num2 - 1], ".</p>";
				return false;
			}
		}

		// Definition of the displayScoreText() function
		function displayScoreText($score) {
			switch ($score) {
				case 2: 
					echo "<p>You rolled Snake Eyes!</p>";
					break;
				case 3:
					echo "<p>You rolled a Loose Deuce!</p>";
					break;
				case 5:
					echo "You rolled a Fever Five!";
					break;
				case 7:
					echo "<p>You rolled a natural!";
				case 9:
					echo "<p>You rolled a nina!</p>";
					break;
				case 12:
					echo "<p>You rolled boxcars!</p>";
					break;

			}
		}

		// We're back to global code again
		$Dice = array();
		$DoublesCount = 0;

		for($gameCount = 1; $gameCount <= 3; ++$gameCount){
			$Dice[0] = rand(1, 6);
			$Dice[1] = rand(1, 6);
			$Total = $Dice[0] + $Dice[1];
			echo "<p>The total score for roll $gameCount was $Total</p>";
			$Doubles = checkForDoubles($Dice[0], $Dice[1]);
			if($Doubles == true){
				++$DoublesCount;
			}
			displayScoreText($Total);
			echo "<hr/>";
		}
		echo "<h3>Doubles occured on $DoublesCount rolls.</h3>";	
	?>	
</body>
</html>