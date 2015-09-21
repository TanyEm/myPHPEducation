<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 16.09.2015
 * Time: 2:27
 */
header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Ассоциативные массивы</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<?php
$code['Russian'] = 7;
$code['Ukraine'] = 3;
$code['USA'] = 1;
$code['Germany'] = 49;

echo '<pre>';
print_r($code);
echo '</pre>';

echo '<br>';

$lang = [
    'Russian language' => 'Язык',
    'Ukraine language' => 'Мову',
    'USA language' => 'Language',
    'Germany language' => 'Sprache'
];

echo '<pre>';
print_r($lang);
echo '</pre>';

echo '<br>';

echo '<h1>The word "language" in different languages</h1>';

echo '<br>';

echo 'Word of Russian language: '.$lang['Russian language'].'<br>';
echo 'Word of Ukraine language: '.$lang['Ukraine language'].'<br>';
echo 'Word of USA language: '.$lang['USA language'].'<br>';
echo 'Word of Germany language: '.$lang['Germany language'];
?>
</body>
</html>