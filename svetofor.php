<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{
			position: absolute;
			top: 10%;
			left: 50%;
			text-align: center;
		}
	</style>
</head>
<body>
<FORM method= "POST" action="">
Цвет 
<INPUT name="min" type="text">
<BR><BR>
<INPUT type="submit" value= "Отправить" name = "do"><BR>
</FORM>
	<?php
	$color = "пусто";
	if (isset($_POST['do']) && ($_POST['min'] != ""))
	{
	$min = $_POST["min"];
	$time = $min % 5;
	if ($min == 1 or $time == 1 )
	{$color = "Зеленый";}
	if ($min == 2 or $time == 2 )
	{$color = "Зеленый";}
	if ($min == 3 or $time == 3 )
	{$color = "Зеленый";}
	if ($min == 4 or $time == 4 )
	{$color = "Красный";}
	if ($min == 5 or $time == 0 )
	{$color = "Красный";}
	}
	else 
	{
		echo "Параметры не введены! ";
	}
		echo "Цвет светофора: " . "$color" ;
	?>
</body>
</html>