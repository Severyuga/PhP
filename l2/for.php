<?php
declare(strict_types=1);

/**
 * Выводит нечётные числа от 1 до 50 в столбик.
 */
function printOddNumbers() {
    for ($i = 1; $i <= 50; $i += 2) {
        echo $i . '<br>';
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Цикл for</title>
</head>
<body>
	<h1>Цикл for</h1>
	<?php
	/*
	ЗАДАНИЕ
	- Используя цикл for выведите в столбик Нечётные числа от 1 до 50
	*/
	printOddNumbers();
	?>
</body>
</html>
