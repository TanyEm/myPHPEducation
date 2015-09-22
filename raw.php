<?php header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>

<html>

<head>
<title>Условные конструкции</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="keywords" content="">
<meta name="description" content="">

</head>

<body>
<?php
$a = 10;
$b = 15;

if($a < $b) echo '$a < $b'.'<br>';

if($a == $b) echo '$a == $b'.'<br>';
else echo '$a != $b'.'<br>';

echo '<br>';

$c = 10;
$d = 20;
$e = 30;

if($c == 1) echo '$c == 1'.'<br>';
elseif($d == 2) echo '$d == 2'.'<br>';
elseif($e == 3) echo '$e == 3'.'<br>';
else echo 'Условия не выполнились<br>';

echo '<br>';

$a = '1';
$b = '1';

if($a == $b) echo '$a == $b'.'<br>';
else echo '$a != $b'.'<br>';

if($a === $b) echo '$a === $b'.'<br>';
else echo '$a !== $b'.'<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '____________________________';
echo '<br>';
echo 'не равно, не эквивалентно';
echo '<br>';
echo 'не равно';
echo '<br>';

$a = 10;
$b = 11;
$c = '13';
$d = '13';

if($a != $b)
 echo 'a != b';
else
 echo 'a = b';
echo '<br>';
if($a != $c)
 echo 'a != c';
echo '<br>';
if($b === $d)
 echo 'b === d';
else
 echo 'b !== d';
echo '<br>';
if($c === $d)
 echo 'c === d';
else
 echo 'c !== d';
echo '<br>';

if(!($c == 10) && $d == 20) echo 'Двойное условие выполнилось<br>';
else echo 'Двойное условие не выполнилось<br>';

echo '<br>';

if($c == 10)
{
 if($d == 20) echo '$d == 20'.'<br>';
 echo 'Строка 1<br>';
 echo 'Строка 2<br>';
}
else
{
 if($e == 30) echo '$e == 30'.'<br>';
 echo 'Строка 3<br>';
 echo 'Строка 4<br>';
}

echo '<br>';

if(false) echo 'YES<br>';
else echo 'NO<br>';


echo '<br>Эта строка находится за блоком условий<br>';


?>
</body>

</html>