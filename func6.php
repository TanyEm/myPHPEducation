<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 30.10.2015
 * Time: 5:41
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
<h2>Проверка наличия расширения на сервере</h2>

<?php
//phpinfo();
if(extension_loaded('mbstring')) echo 'Module mbstring - on <br>';
else echo 'Module mbstring - off <br>';

mb_internal_encoding('utf-8');
echo mb_strlen($b).'<br>';
?>

<h2>Функция определения количества символов</h2>

<?php
$a = 'Hello';
$b = 'Привет';

echo strlen($a).'<br>';
echo strlen($b).'<br>';
echo mb_strlen($b,'utf-8').'<br>';
echo mb_strlen($a,'utf-8').'<br>';
?>
<h2>Функция вырезает часть текста</h2>
<?php
$c = 'Red Green Blue';
$d = 'Красный Зеленый Синий';

echo substr($c, 4).'<br>';
echo substr($c, 4,5).'<br>';
echo substr($d, 8).'<br>';
echo substr($d, 8,7).'<br>';
echo mb_substr($d, 8).'<br>';
echo mb_substr($d, 8,7).'<br>';
?>
<h2>Функция замены и поиска в текстовой строке</h2>
<?php
$e = 'Black White Black White';
$g = 'Черный Белый Черный Белый';

echo str_replace('Black','Orange',$e).'<br>';
echo str_replace('Черный','Оранжевый',$g).'<br>';
?>
<h2>Функция вырезает пробелы вначале и вконце строки</h2>
<?php
$f = '      Tanya Tomchuk      ';
$z = '       Таня Томчук        ';

echo $f.'<br>';
echo 'До обрезки пробелов - '.strlen($f).'<br>';
$w = trim($f);
echo 'После обрезки пробелов - '.strlen($w).'<br>';

echo $z.'<br>';
echo 'До обрезки пробелов - '.mb_strlen($z).'<br>';
$y = trim($z);
echo 'После обрезки пробелов - '.mb_strlen($y).'<br>';
?>
</body>
</html>
