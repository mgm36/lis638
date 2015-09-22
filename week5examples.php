<html>
<body>

<h1>Week 5 Exercises - Arrays</h1>

<h2>Arrays</h2>

<?php
/*
Create a numeric array containing your first, middle, and last name as separate elements
Print out your middle name from the numeric array
Remove your middle name from the numeric array
Put your middle name back in your array
*/

$name = array("Monica","Grace","Maceli");
print $name[1]."<br>";
unset($name[1]);
array_push($name, "Grace"); # or $name[1]="Grace";

/*
Next, create an associative array containing your first, middle, and last name as separate elements
Print out your last name from the associative array
Remove your last name from the associative array
Put your middle name back in your array
*/

$nameA = array("first"=>"Monica","middle"=>"Grace","last"=>"Maceli");
print $nameA["middle"]."<br>";
unset($nameA["middle"]);
$nameA["middle"] = "Grace";

/*
Make an associative array to store the following data about students in a course
(student id and final grade received):

233255435	95.9
234832893	82.33
238385555	85.2
272727237	72.0
334844855	86.5

Using a foreach statement, print out each student id and the grade
Then print out the overall average grade for the course;
And the minimum and maximum grade received
Hint: you may need to look up some useful functions for this!
*/

$studentGrades = array(
"233255435"=>95.9,
"234832893"=>82.33,
"238385555"=>85.2,
"272727237"=>72.0,
"334844855"=>86.5
);

$sum = 0;
foreach ($studentGrades as $id => $grade) {
	print "Student with id of $id received a grade of $grade <br>";
	$sum += $grade;
}

$numStudents = count($studentGrades);
print "<p>The overall class average was ".($sum / $numStudents );
print "<br>The minimum grade was ".min($studentGrades);
print "<br>The maximum grade was ".max($studentGrades);

?>


<h2>Multi-dimensional arrays</h2>

<?php
/*
Pick one of the loops on the previous slide and modify it such that the output for each car is as follows:
Instead of:   Saab 5 2 
Should be:   Saab: 5 (in stock) 2 (sold) 
*/

$cars = array(
	array("Volvo",22,18), 
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
);

for ($i = 0; $i < count($cars); $i++) {
	for ($c = 0; $c < count($cars[$i]); $c++) {
		if ($c == 0) {
			print $cars[$i][$c] . ': ';			
		} elseif ($c == 1) {
			print $cars[$i][$c] . ' (in stock) ';				
		} else {
			print $cars[$i][$c] . ' (sold)<br> ';	
		}		
	}
}

### or we can simply print out the elements in the form we'd like

for ($i = 0; $i < count($cars); $i++) {
	print $cars[$i][0] . ': '.$cars[$i][1] . ' (in stock) '.$cars[$i][2] . ' (sold)<br>';
}

/*
Put the student data in a 2-level associative array:

12345 Bob Smith
23412 Jane Jones

Then, print the data out into an HTML list
*/

$students = array(
	"12345" => array('First Name' => "Bob", 'Last Name' => "Smith"),
	"23412" => array('First Name' => "Jane", 'Last Name' => "Jones"),
);

echo "<ul>";
foreach ($students as $id => $student_info) {
	print '<li>'.$students[$id]['First Name'];
	print ' '.$students[$id]['Last Name'];
	print " ($id)";
}
echo "</ul>";

?>

<h2>Array Functions</h2>

<?php
/*
Sort both arrays containing your names (the numeric and associative arrays) and print them out using print_r() 
How has each array been sorted?
Use sort and then rsort to list the student id/grades by grades, first low to high, then high to low
Next, do the same but for student ids
*/
print_r($name);
sort($name);
print_r($name);
print "<p>";
print_r($nameA);
sort($nameA); # notice what happens with sort(), keys are lost and sorting by values, chart here: http://php.net/manual/en/array.sorting.php
print_r($nameA);

/*
Sort the student info from the previous exercise (i.e. student id & grades) 
by grades, first low to high, then high to low
Next, do the same but for student ids
*/

asort($studentGrades); #asort sorts by VALUES, low to high, preserving the keys (arsort does the reverse)
foreach ($studentGrades as $id => $grade) {
	print "Student with id of $id received a grade of $grade <br>";
}

ksort($studentGrades); #ksort sorts by KEYS, low to high, preserving the keys (krsort does the reverse)
foreach ($studentGrades as $id => $grade) {
	print "Student with id of $id received a grade of $grade <br>";
}

/*
Use the explode function to turn this string into an array: the quick brown fox jumped over the lazy dog
Sort the resulting array then turn it back into a string and print it out
*/

$myArray = explode(" ","the quick brown fox jumped over the lazy dog");
print_r($myArray);
sort($myArray);
print implode(" ",$myArray);

?>


</body>
</html>