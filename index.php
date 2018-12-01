<!DOCTYPE html>
<html>
<body>
<?php
$myName = "Zander Maki"; // Create variable myName
$class = "CIS64"; // Create variable class
$date = "11/27/2018"; // Create variable date
$classA = "CIS60"; // Create first class variable
$classB = "CIS62"; // Create second class variable
$classC = "CIS64"; // Create third class variable
$classList = "I am currently taking " .$classA. ", " .$classB. ", and " .$classC. "."; // Add all class variables into classList

$A = 1; // Create variable A

echo "My name is " .$myName. ", this class is " .$class. ", and today's date is " .$date; // Display name, this class, and date
echo "<br>"; // New line
echo "<br>"; // New line

if ($A > 0) // If variabel A is greater than zero
	echo $classList; // Display variable classList
elseif ($A == 0) // If first check is false, check if A equals zero
	echo "Coursework for " .$myName. " is confidential."; // Display text with myName variable
?>
</body>
</html>
