<?php
if(isset($_POST['but']))
{
	$res=$_POST['disp'];
	$res=eval('return '.$res.';');#space between return and quote(')
}
?>
<html>
<head>
<title>desk cal</title>
</head>
<body>
<style>
input[type="button"]{width:100%;height:100%;color: white; background-color:black;}
input[type="submit"]{width:100%;height:100%;color: white; background-color:black;}
table{width:50%;height:50%}
input[type="text"]{width:100%;height:100%}
</style>
<form name ="cal" method="post">
<center>
<table style="background-color:red;" border=1>
<tr>
<td  colspan=4><input type="text" name="disp" value="<?php if(isset($res)) echo $res; ?>"></td>
</tr>
<tr>
<td><input type="button"value="1" onclick="cal.disp.value += '1' "></td>
<td><input type="button"value="2" onclick="cal.disp.value += '2' "></td>
<td><input type="button"value="3" onclick="cal.disp.value += '3' "></td>
<td><input type="button"value="*" onclick="cal.disp.value += '*' "></td>
</tr>
<tr>
<td><input type="button"value="4" onclick="cal.disp.value += '4' "></td>
<td><input type="button"value="5" onclick="cal.disp.value += '5' "></td>
<td><input type="button"value="6" onclick="cal.disp.value += '6' "></td>
<td><input type="button"value="/" onclick="cal.disp.value += '/' "></td>
</tr>
<tr>
<td><input type="button"value="7" onclick="cal.disp.value += '7' "></td>
<td><input type="button"value="8" onclick="cal.disp.value += '8' "></td>
<td><input type="button"value="9" onclick="cal.disp.value += '9' "></td>
<td><input type="button"value="-" onclick="cal.disp.value += '-' "></td>
</tr>
<tr>
<td><input type="button"value="c" onclick="cal.disp.value = ' ' "></td>
<td><input type="button"value="0" onclick="cal.disp.value += '0' "></td>
<td><input type="button"value="+" onclick="cal.disp.value += '+' "></ts>
<td><input type="submit"value="=" name="but"></td>
</tr>
</table>
</center>
</form>
</body>
</html>
