<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 23.10.15
 * Time: 16:28
 */
header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Информационные функции</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<h2>Определение существования функции</h2>
<?php
$a = 3;
if(isset($a)) echo '$a - существует';
else echo '$a - не существует';
echo '<br><br>';

if(isset($b)) echo '$b - существует';
else echo '$b - не существует';
echo '<br><br>';
?>
<h2>Функция которая уничтожает переменные</h2>
<?php
unset($a);
if(isset($a)) echo '$a - существует';
else echo '$a - не существует';
?>
<h2>Поиск числа</h2>
<?php
if(is_numeric(17)) echo '17 - число';
else echo '17 - не число';

echo '<br>';

if(is_numeric(17.56)) echo '17.56 - число';
else echo '17.56 - не число';

echo '<br>';

if(is_numeric('18')) echo '"18" - число';
else echo '"18" - не число';

echo '<br>';

if(is_numeric('17dr')) echo '17dr - число';
else echo '17dr - не число';
?>
<h2>Функция, позволяющая определить является ли число целым</h2>
<?php
if(is_int(17)) echo '17 - целое';
else echo '17 - не целое';

echo '<br>';
if(is_int(17.1)) echo '17.1 - целое';
else echo '17.1 - не целое';

echo '<br>';

if(is_int('17')) echo '"17" - целое';
else echo '"17" - не целое';
?>
<h2>Проверка дробного числа</h2>
<?php
if(is_float(17.1)) echo '17.1 - дробное';
else echo '17.1 - не дробное';

echo '<br>';

if(is_float(17)) echo '17 - дробное';
else echo '17 - не дробное';

echo '<br>';

if(is_float(17)) echo '"17.1" - дробное';
else echo '"17.1" - не дробное';
?>
</body>
</html>