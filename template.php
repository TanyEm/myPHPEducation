<?php header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>

<html>

<head>
    <title>Двойные условия</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">

</head>

<body>
<?php
$a = 10;
$b = 20;

if($a == 1 && $b == 2)
echo 'Двойное условие выполнено';
else
    echo 'Двойное условие не выполнено';

?>
</body>
</html>