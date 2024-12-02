!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Функции</h1>
	<?php
    $extensions = get_loaded_extensions();
    
    foreach ($extensions as $extens) {
        $function = get_extension_funcs($extens);
        
        echo "<h2>{$extens}</h2>";

        if ($function) {
            echo '<ul>';

            foreach ($function as $funct) {
                echo "<li>{$funct}";
            }
            echo '</ul>';
    } else {
        echo '<p>Нет доступных функций';
    }
    }   
	?>
</body>
</html>