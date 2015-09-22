<html>
<body>
<h1>Speeding Ticket</h1>
<?php
/*
Write code to compute the kind of ticket you will receive and print it out on the page.  The ticket rules are as follows: 
If speed is 60 mph or less, the result is "No ticket" 
If speed is between 61 mph and 80 mph (inclusive), the result is "Small ticket" 
If speed is 81 mph or more, the result is "Big ticket"
Unless it is your birthday -- on that day, your speed can be 5 mph higher in all cases!
Hint:  date("md") will give you the current day and month, i.e. 0812 for August, 12th 
*/

$speed = 67;
$birthday = "1124";

if ($birthday==date("md")) $speed -= 5;

if ($speed <= 60) {
	print "No ticket!";
} elseif ($speed > 60 && $speed < 81) {
	print "Small ticket";
} else {
	print "Big ticket!";
}
?>

<h1>Times Tables</h1>

<?php
/*
Use a loop to print out the times table from 1 through 12
*/

echo "<table border=\"1\">";
for ($count = 1; $count <= 12; ++$count)
{
	echo "<tr>";
	for ($count2 = 1; $count2 <= 12; ++$count2) {
		echo "<td>".$count * $count2."</td>";
	}
	echo "</tr>";
}
echo "</table><p></p>";

/*
Then highlight the square numbers in the table (with CSS)
*/

echo "<table border=\"1\">";
for ($count = 1; $count <= 12; ++$count)
{
	echo "<tr>";
	for ($count2 = 1; $count2 <= 12; ++$count2) {
		($count == $count2 ) ? $style = ' style="background-color: yellow;"' : $style = NULL;
		echo "<td$style>".$count * $count2."</td>";
	}
	echo "</tr>";
}
echo "</table><p></p>";

/*
Then modify your code so you can easily change the 12 to be any maximum number you'd like, 
i.e. create times tables for different input numbers
*/

$inputNum = 5;

echo "<table border=\"1\">";
for ($count = 1; $count <= $inputNum; ++$count)
{
	echo "<tr>";
	for ($count2 = 1; $count2 <= $inputNum; ++$count2) {
		($count == $count2 ) ? $style = ' style="background-color: yellow;"' : $style = NULL;
		echo "<td$style>".$count * $count2."</td>";
	}
	echo "</tr>";
}
echo "</table><p></p>";

?>

</body>
</html>