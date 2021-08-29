<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Основное задание</title>
</head>
<body>
<?php
	
	$string = "5 * (4 - 2)";
	$array = str_split($string);
	$open = 0;
	$close = 0;
	for ($i = 0; $i < count($array); $i++) {
		if ($array[$i] == "(") {
			$open++;
			$openKey = $i;
		}
		elseif ($array[$i] == ")") {
			$close++;
			$closeKey = $i;
		}
	}
	if ($open == 0 && $close == 0) {
		echo ("В данной строке нет скобок.");
	}
	elseif ($open == $close && $openKey < $closeKey) {
		echo("В данной строке открывающих и закрывающих скобок равное количество и их расположение корректно.");
	}
	elseif ($open == $close && $openKey > $closeKey) {
		echo ("В данной строке открывающих и закрывающих скобок равное количество, но их расположение некорректно.");
	}
	elseif ($open > $close) {
		echo ("В данной строке открывающих скобок на ". $open - $close ." больше чем закрывающих.");
	}
	else {
		echo ("В данной строке закрывающих скобок на ". $close - $open ." больше чем открывающих.");
	}
	


?>
</body>
</html>