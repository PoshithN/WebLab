<?php
if(isset($_POST['but']))
{
	$res=$_POST['disp'];
	$res=eval('return '.$res.';');#1 gap space between return and closing quotes 
}
?>
<html>
<head>
<title>desk cal</title>
</head>
<body>
<style>
input[type="button"]{width:100%;height:100%}
input[type="submit"]{width:100%;height:100%}
table{width:50%;height:50%}
input[type="text"]{width:100%;height:100%}
</style>
<form name ="cal" method="post">
<center>
<table style="background-color:red;" border=1>
<tr>
<td  colspan=4><input type="text" name="disp" value="<?php if(isset($res)){ echo $res;} ?>"></td>#need not require { and }
</tr>
<tr>
<td><input style="color: white; background-color:black;"type="button"value="1" onclick="cal.disp.value += '1' "></td>
<td><input style="color: white; background-color:black;"type="button"value="2" onclick="cal.disp.value += '2' "></td>
<td><input style="color: white; background-color:black;"type="button"value="3" onclick="cal.disp.value += '3' "></td>
<td><input style="color: white; background-color:black;"type="button"value="*" onclick="cal.disp.value += '*' "></td>
</tr>
<tr>
<td><input style="color: white; background-color:black;"type="button"value="4" onclick="cal.disp.value += '4' "></td>
<td><input style="color: white; background-color:black;"type="button"value="5" onclick="cal.disp.value += '5' "></td>
<td><input style="color: white; background-color:black;"type="button"value="6" onclick="cal.disp.value += '6' "></td>
<td><input style="color: white; background-color:black;"type="button"value="/" onclick="cal.disp.value += '/' "></td>
</tr>
<tr>
<td><input style="color: white; background-color:black;"type="button"value="7" onclick="cal.disp.value += '7' "></td>
<td><input style="color: white; background-color:black;"type="button"value="8" onclick="cal.disp.value += '8' "></td>
<td><input style="color: white; background-color:black;"type="button"value="9" onclick="cal.disp.value += '9' "></td>
<td><input style="color: white; background-color:black;"type="button"value="-" onclick="cal.disp.value += '-' "></td>
</tr>
<tr>
<td><input style="color: white; background-color:black;"type="button"value="c" onclick="cal.disp.value = ' ' "></td>
<td><input style="color: white; background-color:black;"type="button"value="0" onclick="cal.disp.value += '0' "></td>
<td><input style="color: white; background-color:black;"type="button"value="+" onclick="cal.disp.value += '+' "></ts>
<td><input style="color: white; background-color:black;"type="submit"value="=" name="but"></td>
</tr>
</table>
</center>
</form>
</body>
</html>
