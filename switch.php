<?php header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>

<html>

<head>
    <title>Конструкция switсh</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">

</head>

<body>
<?php
$year = 2015;

switch($year)
{
    case 2008:
        echo 'Год 2008<br>';
        echo 'Список статей<br>';
        break;

    case 2009:
        echo 'Год 2009<br>';
        echo 'Список статей<br>';
        break;

    case 2010:
        echo 'Год 2010<br>';
        echo 'Список статей<br>';
        break;

    case 2010:
        echo 'Год 2010<br>';
        echo 'Список статей<br>';
        break;

    case 2011:
        echo 'Год 2011<br>';
        echo 'Список статей<br>';
        break;

    case 2012:
        echo 'Год 2012<br>';
        echo 'Список статей<br>';
        break;

    case 2013:
        echo 'Год 2013<br>';
        echo 'Список статей<br>';
        break;

    case 2014:
        echo 'Год 2014<br>';
        echo 'Список статей<br>';
        break;

    case 2015:
        echo 'Год 2015<br>';
        echo 'Список статей<br>';
        break;

    default:
        echo 'Неправильно указан год<br>';
}

echo 'Эта строка находится за конструкцией SWITCH<br>';
?>
</body>
</html>