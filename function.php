<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 08.10.2015
 * Time: 23:37
 */
header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>

<html>

<head>
    <title>Cycle foreach</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">

</head>

<body>
<?php
include('func_descr.php');

func1();

echo '<br>';

func2(12,6);
func2(6,12);

$a = 8;
$b = 4;

func2($a,$b);

echo '<br>';

$c = func3(6,4);

echo '$c = '.$c.'<br>';

echo func3(7,8);

echo '<br>';

echo '<pre>';
print_r(func4());
echo '</pre>';

func5(5);
func5(5,2,3);
func5(5,2);

echo '<br>';

$var2 = 2;
$var3 = 3;

func6(5);

echo '$var3 = '.$var3.'<br><br>';

?>
</body>
</html>