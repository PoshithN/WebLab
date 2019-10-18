<?php
$trans = array(
	array(8,2,7),
	array(7,4,0),
	array(4,0,89),
);
echo "<h2> Matrix </h2>";
for ($row=0; $row<3; $row++) {
 echo "<br>";
for ($col=0; $col<3; $col++) {
 echo " ".$trans[$row][$col];#space between double quotes applies to all 8th programs
	}
}

echo "<h2> Transpose of Matrix </h2>";
for ($row=0; $row<3; $row++) {
 echo "<br/>";
for ($col=0; $col<3; $col++) {
 echo " ".$trans[$col][$row];
	}
}
