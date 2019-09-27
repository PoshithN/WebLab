<?php
$fp = fopen("counterlog.txt", "r");#any NAME with .txt extension
$count = fread($fp,10); #10 indicates number of bytes(any value)
fclose($fp);
$count = $count+1;
echo "<p> Page Views: " .$count. "</p>";
$fp = fopen("counterlog.txt", "w");
fwrite($fp,$count);
fclose($fp);
?>
