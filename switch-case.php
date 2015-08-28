<?php header('Content-type: text/html; charset=utf-8')
/**
 * Created by PhpStorm.
 * User: tanyatomchuk
 * Date: 21.08.15
 * Time: 16:03
 */
;?>
<!DOCTYPE HTML>

<html>

<head>
    <title>switch/case</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">

</head>

<body>
<?php
echo '<h1>SWITCH/CASE</h1><br>';
$day=10;
switch($day)
{
    case 1:
        echo 'Weekday';
        break;
    case 2:
        echo 'Weekday';
        break;
    case 3:
        echo 'Weekday';
        break;
    case 4:
        echo 'Weekday';
        break;
    case 5:
        echo 'Weekday';
        break;
    case 6:
        echo 'Holiday';
        break;
    case 7:
        echo 'Holiday';
        break;
    default:
        echo 'Unknown day';
}
?>
</body>
</html>