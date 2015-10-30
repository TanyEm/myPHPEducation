<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 25.10.2015
 * Time: 20:39
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
echo 'Текущий часовой пояс: ';
echo date_default_timezone_get();
echo '<br><br>';
date_default_timezone_set('America/Los_Angeles');
echo 'Новый часовой пояс: ';
echo date_default_timezone_get();
echo '<br><br>';
?>
<h2>Текущая дата</h2>
<?php
echo date('d.m.Y H:i:s');
echo '<br><br>';
echo date('Y-m-d d/m/y');
echo '<br><br>';
echo 'Текущее время (unixtamp): ';
echo time();
echo '<br><br>';
echo '12/06/2000 (unixtamp): ';
echo mktime(0,0,0,6,15,2000);
echo '<br><br>';
echo '01/01/1970 (unixtamp): ';
echo mktime(16,0,0,12,31,1969);
echo '<br><br>';
echo '15/05/2000 (date): ';
echo date('d.m.Y H:i:s', mktime(1,2,3,6,15,2000));
echo '<br><br>';
?>
</body>
</html>