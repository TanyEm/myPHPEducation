<?php header('Content-type: text/html; charset=utf-8')
    /**
     * Created by PhpStorm.
     * User: tanyatomchuk
     * Date: 20.08.15
     * Time: 19:03
     */
;?>
<!DOCTYPE HTML>

<html>

<head>
    <title>if/else</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">

</head>

<body>
<?php
echo '<h1>IF/ELSE</h1><br>';
$age=0;
if($age>=18 && $age<=59)
echo 'Вам еще работать и работать';
elseif($age>59)
echo 'Вам пора на пенсию';
elseif($age>=1 && $age<=17)
echo 'Вам еще рано работать';
else
echo 'Неизвестный возраст';
?>
</body>
</html>