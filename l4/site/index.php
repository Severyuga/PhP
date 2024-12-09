<?php
include 'inc/lib.inc.php';
include 'inc/data.inc.php';

declare(strict_types=1);
/*
   ЗАДАНИЕ 1
   - Присвойте переменной $now значение метки времени актуальной даты(сегодня)
   - Присвойте переменной $birthday значение метки времени Вашего дня рождения
   - Создайте переменную $hour
   - С помощью функции getdate() присвойте переменной $hour текущий час
*/

$now = time();
$birthday = mktime(0, 0, 0, 10, 9, (int) date('Y'));
$hour = getdate()['hours'];


// установка приветствия
$welcome = "Добрый день";
setWelcome($welcome);

$title = 'Сайт нашей школы';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'] ?? '')));
switch ($id) {
  case 'about':
    $title = 'О сайте';
    $header = 'О нашем сайте';
    break;
  case 'contact':
    $title = 'Контакты';
    $header = 'Обратная связь';
    break;
  case 'table':
    $title = 'Таблица умножения';
    $header = 'Таблица умножения';
    break;
  case 'calc':
    $title = 'Он-лайн калькулятор';
    $header = 'Калькулятор';
    break;
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="table.css">
</head>

<body>
  <header>
    <?php include 'inc/header.inc.php'; ?>
  </header>

  <section>
    <!-- Заголовок -->
    <h1><?= $header ?></h1>
    <!-- Область основного контента -->
    <?php
    switch ($id) {
      case 'about':
        include 'about.php';
        break;
      case 'contact':
        include 'contact.php';
        break;
      case 'table':
        include 'tables.php';
        break;
      case 'calc':
        include 'calculator.php';
        break;
      default:
        include 'inc/index.inc.php';
    }
    ?>
    <!-- Область основного контента -->
  </section>
  <nav>
    <!-- Навигация -->
    <?php include 'inc/menu.inc.php'; ?>
    <!-- Навигация -->
  </nav>
  <footer>
    <!-- Нижняя часть страницы -->
    <?php include 'inc/bottom.inc.php'; ?>
    <!-- Нижняя часть страницы -->
  </footer>
</body>

</html>

<?php
declare(strict_types=1);
/*
   ЗАДАНИЕ 1
   - Присвойте переменной $now значение метки времени актуальной даты(сегодня)
   - Присвойте переменной $birthday значение метки времени Вашего дня рождения
   - Создайте переменную $hour
   - С помощью функции getdate() присвойте переменной $hour текущий час
*/

$now = time();
$birthday = mktime(0, 0, 0, 10, 9, (int) date('Y'));
$hour = getdate()['hours'];

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Использование функций даты и времени</title>
</head>

<body>
    <h1>Использование функций даты и времени</h1>
    <?php
    /*
       ЗАДАНИЕ 2
       - Используя управляющую конструкцию if – elseif - else присвойте 
         переменной $welcome значение, изходя из следующих условий
         если число в переменной $hour попадает в диапазон:
         * от 0 до 6 - 'Доброй ночи'
         * от 6 (включительно) до 12 - 'Доброе утро'
         * от 12 (включительно) до 18 - 'Добрый день'
         * от 18 (включительно) до 23 - 'Добрый вечер'
         * Если число в переменной $hour не попадает ни в один из вышеперечисленных
           диапазонов, то присвойте переменной $welcome значение 'Доброй ночи'
       - Выведите $welcome на отдельной строке
       - Установите локаль ru_RU.UTF-8
       - С помощью функции datefmt_format() на отдельной строке выведите 
         текущую дату, месяц, год, день недели и время,
         например, "Сегодня 1 сентября 2018 года, суббота 09:30:00" 
       - На отдельной строке выведите фразу "До моего дня рождения осталось "
       - Выведите количество дней, часов, минут и секунд оставшееся до Вашего дня рождения
    */

    if ($hour >= 0 && $hour < 6)
        $welcome = 'Доброй ночи';
    elseif ($hour >= 6 && $hour < 12)
        $welcome = 'Доброе утро';
    elseif ($hour >= 12 && $hour < 18)
        $welcome = 'Добрый день';
    elseif ($hour >= 18 && $hour < 23)
        $welcome = 'Добрый вечер';
    else
        $welcome = 'Доброй ночи';

    setlocale(LC_TIME, 'ru_RU.UTF-8');

    $fmt = datefmt_create(
        'ru_RU',
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        'Europe/Moscow',
        IntlDateFormatter::GREGORIAN,
        "Сегодня d MMMM Y года, EEEE H:mm:ss"
    );