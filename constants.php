<?php header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>

<html>

<head>
    <title>Константы</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">

</head>

<body>
<?php

define('PI', 3.14);

$a = 2;

$b = $a * PI + 3;

echo 'Переменная PI = '.PI.'<br>';

echo 'Значение $b = ',"$b";

?>
</body>
</html>