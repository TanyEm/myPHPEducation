<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 20.09.2015
 * Time: 17:28
 */
header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Циклы</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<?php
echo 'for №1';
for($i = 0;$i < 5;$i++)
{
    echo $i.'<br>';
}

echo '<br> for №2 <br>';

for($i = 5;$i > 0;$i--)
{
    echo $i.'<br>';
}
echo '<br> while №1 <br>';
$i = 1;
while($i < 5)
{
    echo $i.'<br>';
    $i++;
}
echo '<br> while №2 <br>';
$i = 5;
while($i > 0)
{
    echo $i.'<br>';
    $i--;
}

echo '<br> while №3 <br>';
//не сработает
$i = -2;
while($i > 0)
{
    echo $i.'<br>';
    $i--;
}

echo '<br> do while №1 <br>';

$i = -2;
do
//подходит только если нужно хотябы раз пройти цикл и вывести
{
    echo $i.'<br>';
    $i--;
}
while($i > 0);

echo '<br>';
echo '<h1>Вложеные циклы</h1>';

$m = 1;
while($m <= 5)
{
    echo 'Цикл 1, итерация '.$m.'<br><br>';
    $n = 1;
    while($n <= 3)
    {
        echo '--- Цикл 2, итерация '.$n.'<br>';
        $n++;
    }
    echo '<br>';
    $m++;
}

echo '<br>';

$i = 0;
while($i < 10)
{
    if($i == 3) break;
    echo $i.'<br>';
    $i++;
}

echo '<br>';

$i = 0;
while($i < 10)
{
    $i++;
    if($i >= 3 && $i <= 7) continue;
    echo $i.'<br>';
}

echo '<br>';
echo '<h1>Прерывание безконечного цикла</h1>';

$i = 0;
while(true)
{
    if($i == 10) break;
    echo $i.'<br>';
    $i++;
}

?>
</body>
</html>