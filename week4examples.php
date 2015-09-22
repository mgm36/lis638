<html>
<body>
<h1>String Functions</h1>
<?php
/*
Create a string with your full name (i.e. your first middle and last name separated with spaces in one string)
Use the substr() function to print out just your first, middle, and last names separately
Use string function(s) to uppercase just your MIDDLE NAME
Finally, shuffle the characters in your full name and print it out
*/

$fullname = "Monica Grace Maceli";

echo substr($fullname,0,6) . "<br>\n"; //First
echo substr($fullname,7,5) . "<br>\n"; //Middle
echo substr($fullname,-6) . "<br>\n"; // Last
echo strtoupper(substr($fullname,7,5)) . "<br>\n"; // UC middle name
echo str_shuffle($fullname);

?>

<h1>Function Exercises</h1>

<?php
// Write a function that takes a meal price and desired tip percentage and returns tip 

$mealCost = 24.55; 
$tipPercentage = 18;

echo "<h2>Tip Calculator</h2>";

$tip = calculateTip($mealCost, $tipPercentage); // save return value into variable
echo "Tip should be: $tip";

function calculateTip($m, $tp) {
	$tip = $m * ($tp/100);
	return $tip;
}

// For extra work, rewrite your function to print out a range of possible tip percentages

// Take the code from one (or both!) of your exercises from HW1 and revise it to use function(s)

echo "<h2>Bottles of Beer Function</h2>";

$bottles = 8;
singSong($bottles); // calling function passing the bottles var as a parameter
singSong(3); // calling function again, this time with int as parameter

function singSong($bottles) {
	while ($bottles) {
		print "$bottles ".bottleText($bottles)." of beer on the wall, $bottles ".bottleText($bottles)." of beer!<br>";
		$bottles--;
		print "Take one down and pass it around, ".$bottles." ".bottleText($bottles)." of beer on the wall!<br>";
	}
}

function bottleText($numBottles) {
	( $numBottles == 1 ) ? $text = "bottle" : $text = "bottles";
	return $text;
}

?>

</body>
</html>