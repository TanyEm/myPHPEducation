<?php header('Content-type: text/html; charset=utf-8')
/**
 * Created by PhpStorm.
 * User: tanyatomchuk
 * Date: 24.08.15
 * Time: 17:49
 */
;?>
<!DOCTYPE HTML>

<html>

<head>
    <title>Area of a triangle</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">

</head>

<body>
<?php
echo '<h1>Площадь треугольника</h1><br>';
$a=10;
$s=1/4*$a*sqrt(3);
echo "Площадь треугольника, если сторона а = $a<br>";
echo "Площадь треугольника равна $s";
?>
</body>
</html>
