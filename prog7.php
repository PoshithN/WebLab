<?php
date_default_timezone_set("Asia/Kolkata");
echo "date & time:".date("d/m/y::h:i:s A");#do not use 'P' with 'h'
echo "<p>".date("d/m/y::h:i:sa")."</p>";#'m' always stands for month.. do not use in place of minute ('i')
echo "<p>".date("d/m/y::H:i:s")."</p>";
echo "<p>".date("d/m/y::H:i:s P")."</p>";#do not use 'p'.... can use 'P'
echo "<p>".date("d/m/y::H:i:s a")."</p>";#no problem to use 'a'/'A'
?>
