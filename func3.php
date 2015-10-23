<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 23.10.15
 * Time: 21:11
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
$a = file_get_contents('content.txt');
echo '<pre>';
echo $a;
echo '</pre>';

$b = file_get_contents('http://www.yandex.ru/');
echo $b;
?>
</body>
</html>