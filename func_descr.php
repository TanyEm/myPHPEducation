<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 08.10.2015
 * Time: 23:35
 */


function func1()
{
    echo 'func1: Функция работает<br>';
}

function func2($p1,$p2)
{
    $d = $p1 / $p2;
    echo "func2: $p1 / $p2 = $d<br>";
}

function func3($p1,$p2)
{
    return $p1 + $p2;
}

function func4()
{
    $a = array('one','two','three');
    return $a;
}

function func5($p1, $p2=15, $p3 = 10)
{
    $sum = $p1 + $p2 + $p3;
    echo "func5: $p1 + $p2 + $p3 = $sum<br>";
}

function func6($var)
{
    $var3 = 5;
    echo 'func6: $var = '.$var.'<br>';
    echo 'func6: $var3 = '.$var3.'<br>';
}

