<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $day и присвойте ей произвольное целочисленное значение.
*/
$day = 3; // Присваиваем произвольное целочисленное значение
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция match</title>
</head>
<body>
	<h1>Конструкция match</h1>
	<?php
	/*
	ЗАДАНИЕ 3
	- Выполните задание 2 используя управляющую конструкцию match.
	*/
	$result = match ($day) {
		1, 2, 3, 4, 5 => 'Это рабочий день',
		6, 7 => 'Это выходной день',
		default => 'Неизвестный день',
	};
	echo $result . '<br>';
	?>
</body>
</html>
