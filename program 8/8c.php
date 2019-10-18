<?php
$a1 = array(array(1,3,5),array(7,9,0));
$a2 = array(array(2,4,6),array(8,10,0));



$res=array();

for($i=0;$i<=1;$i++){
 for($j=0;$j<=2;$j++){
	$res[$i][$j]=$a1[$i][$j]+$a2[$i][$j];
	}
}
echo "<h4>matrix a1</h4>";
for($i=0;$i<=1;$i++){
echo "</br>";
 for($j=0;$j<=2;$j++){
	echo " ".$a1[$i][$j];
	}
}
echo "<h4>matrix a1</h4>";
for($i=0;$i<=1;$i++){
echo "<br>";
 for($j=0;$j<=2;$j++){
	echo " ".$a2[$i][$j];
	}
}
echo "<h4>matrix a1</h4>";
for($i=0;$i<=1;$i++){
echo "<br/>";
 for($j=0;$j<=2;$j++){
	echo " ".$res[$i][$j];
	}
}
?>


