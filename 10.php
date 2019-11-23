<html>
<head>
<style>
table,td,th
{
border: 1px solid blue;
width: 33%;
text-align: center;
border-collapse:collapse;
background-color:#123456;
color:white;
}
table
{
margin:auto;
}
</style>
</head>
<body>

<?php
$sname = "localhost";
$uname = "root";
$pswrd = "";#no space between quotes
$dbname = "prog10";
$a=[];
$conn=mysqli_connect($sname,$uname,$pswrd,$dbname);
if($conn->connect_error)
{	
die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM student";
$result = $conn->query($sql);

echo "<br>";
echo "<center> BEFORE SORTING </center>";
echo "<table>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>SEM</th></tr>";

if($result->num_rows>0)
{
	while($row = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>". $row['USN']."</td>";
		echo "<td>". $row['Name']."</td>";
		echo "<td>". $row["Sem"]."</td></tr>";
		array_push($a,$row["USN"]);
	}
}
else
echo "Table is empty";
echo "</table>";
$n=count($a);


for($i=0; $i<($n-1); $i++)
{
	$pos= $i;
	for ( $j = $i + 1 ; $j < $n ; $j++ ) {
		if ( $a[$pos] > $a[$j] )
		{
			$pos= $j;
		}
	}
	if ( $pos!= $i ) {
		$temp=$a[$i];
		$a[$i] = $a[$pos];
		$a[$pos] = $temp;
	}
}

$c=[];
$d=[];
$result = $conn->query($sql);
if($result->num_rows>0)
{
	while($row = $result->fetch_assoc()) {
		for($i=0;$i<$n;$i++) {
			if($row["USN"]== $a[$i]) {
				$c[$i]=$row["Name"];
				$d[$i]=$row["Sem"];
			}
		}
	}
}

echo "<br>";
echo "<center> AFTER SORTING <center>";
echo "<table>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>SEM</th></tr>";
for($i=0;$i<$n;$i++) {
	echo "<tr>";
	echo "<td>". $a[$i]."</td>";
	echo "<td>". $c[$i]."</td>";
	echo "<td>". $d[$i]."</td></tr>";
}
echo "</table>";
$conn->close();
?>
</body>
</html>




