<?php header('Content-type: text/html; charset=utf-8')
/*
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 20.07.2015
 * Time: 0:27
 */
;?>
<!DOCTYPE html>

<html>
<head>
    <title>Массивы</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<?php
echo '<h1>Индексные массивы</h1>';
$lang[]='HTML';
$lang[]='CSS';
$lang[]='PHP';
$lang[]='JAVA';
echo $lang.'<br>';
echo '<br>';
echo $lang[0].'<br>';
echo '<br>';
echo $lang[1].'<br>';
echo '<br>';
echo $lang[2].'<br>';
echo '<br>';
echo $lang[3].'<br>';
echo '<pre>';
print_r($lang);
echo '<pre>';

echo '<br><br>';
$lang2[3]='perl';
$lang2[7]='piton';
$lang2[10]='ruby';
$lang2[14]='JS';
echo '<pre>';
print_r($lang2);
echo '<pre>';
$lang2[]='C#';
echo '<pre>';
print_r($lang2);
echo '<pre>';
echo '<br><br>';
$lang3 = array(9 => 'HTML', 'CSS', 'JS');
echo '<pre>';
print_r($lang3);
echo '<pre>';
echo "Каскадные таблицы стилей: $lang3[10] <br>";
echo 'каскадные таблицы стилей: '.$lang3[11].'<br>';
?>
</body>
</html>

