<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 24.10.2015
 * Time: 23:04
 */
header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Функция file_get_contents</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<?php
printf('text string');

echo '<br><br>';

$int = 65894;
$str = 'text';
$float = 15.5465468;
$perc = 16;

printf('Значение переменных <br> int = %d <br> $str = %s <br> $float = %.8f <br>  $perc = %s%%', $int, $str, $float, $perc);
?>
</body>
</html>