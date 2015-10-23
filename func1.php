<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 23.10.15
 * Time: 15:11
 */
header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Функции</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<h2>Возведение числа в степень</h2>
<ul>
    <li>
        <?php $a = pow(3,2);
        echo $a;
        echo '<br>'; ?>
    </li>
    <li>
        <?php echo pow(2, -2); ?>
    </li>
    <li>
        <?php echo pow(2, 1/2); ?>
    </li>
</ul>
<h2>Извлечение корня</h2>
<ul>
    <li>
    <?php echo sqrt(4); ?>
    </li>
    <li>
        <?php echo sqrt(-2); ?>
    </li>
    </ul>
<h2>Модуль числа</h2>
<ul>
    <li>
        <?php echo abs(6); ?>
    </li>
    <li>
        <?php echo abs(-2.7); ?>
    </li>
</ul>
<h2>Округление</h2>
<h3>Математическое</h3>
<ul>
    <li>
        <?php echo round(3.4); ?>
    </li>
    <li>
        <?php echo round(4.8); ?>
    </li>
</ul>
<h3>С избытком</h3>
<ul>
    <li>
        <?php echo ceil(3.001); ?>
    </li>
</ul>
<h3>С недостатком</h3>
<ul>
    <li>
        <?php echo floor(3.99); ?>
    </li>
</ul>
<h2>Генератор случайных чисел</h2>
<ul>
    <li>
        <?php echo rand(); ?>
    </li>
    <li>
        <?php echo rand(3, 45); ?>
    </li>
</ul>
</body>
</html>