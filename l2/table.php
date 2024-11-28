
<?php
declare(strict_types=1);

/**
 * Создает таблицу умножения в виде HTML-таблицы.
 *
 * @param int $cols Количество столбцов.
 * @param int $rows Количество строк.
 */
function createMultiplicationTable(int $cols, int $rows): void {
    echo '<table>';
    for ($i = 0; $i <= $rows; $i++) {
        echo '<tr>';
        for ($j = 0; $j <= $cols; $j++) {
            if ($i === 0 || $j === 0) {
                echo '<th style="text-align: center; background-color: lightgrey;">';
            } else {
                echo '<td>';
            }
            if ($i === 0 && $j === 0) {
                echo '&nbsp;';
            } else {
                echo ($i * $j);
            }
            if ($i === 0 || $j === 0) {
                echo '</th>';
            } else {
                echo '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}

/*
ЗАДАНИЕ 1
- Создайте две целочисленные переменные $cols и $rows
- Присвойте созданным переменным произвольные значения в диапазоне от 1 до 10
*/
$cols = 5; // Присваиваем произвольное значение в диапазоне от 1 до 10
$rows = 4; // Присваиваем произвольное значение в диапазоне от 1 до 10
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Таблица умножения</title>
	<style>
		table {
			border: 2px solid black;
			border-collapse: collapse;
		}

		th,
		td {
			padding: 10px;
			border: 1px solid black;
		}

		th {
			background-color: yellow;
		}
	</style>
</head>
<body>
	<h1>Таблица умножения</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Используя циклы отрисуйте таблицу умножения в виде HTML-таблицы на следующих условиях
		- Число столбцов должно быть равно значению переменной $cols
		- Число строк должно быть равно значению переменной $rows
		-  Ячейки на пересечении столбцов и строк должны содержать значения, являющиеся произведением порядковых номеров столбца и строки
	- Рекомендуется использовать цикл for

	ЗАДАНИЕ 3
	- Значения в ячейках первой строки и первого столбца должны быть отрисованы полужирным шрифтом и выровнены по центру ячейки
	- Фоновый цвет ячеек первой строки и первого столбца должен быть отличным от фонового цвета таблицы
	*/
	createMultiplicationTable($cols, $rows);
	?>
</body>
</html>
