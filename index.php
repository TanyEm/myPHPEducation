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
?>
</body>
</html>

