<?php
/**
 * Created by PhpStorm.
 * User: tanyatomchuk
 * Date: 22.09.15
 * Time: 20:47
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
$cod = [
    'Moscow' => 495,
    'St.Petersburg' => 812,
    'Chelyabinsk' => 351
];

foreach($cod as $kay => $value)
{
    echo 'City: '.$kay.' Code: '.$value.'<br>';
}

echo '<br>';

$number = array('one','two','three','four','five');

foreach($number as $num)
{
    echo $num.'<br>';
};

echo '<br>';

$garden = [
    'Fruit' => [
        'Apple' => 2,
        'Pear' => 6,
        'Lemon' => 7
    ],
    'Vegetables' => [
        'Tomato' => 6,
        'Cucumber' => 6,
        'Zucchini' => 3
    ],
    'Berries' =>[
        'Blueberries' => 40,
        'Strawberry' => 20,
        'Raspberries' => 40
    ],
    'Flowers' =>[
        'Rose' => 100,
        'Lily' => 100,
        'Orchid' => 40
    ]
];

$kay = 0;
$num = 0;

foreach($garden as $kay => $kind)
{
    echo "<b>$kay:</b><br>";
    //echo "$kind<br>";
    foreach($kind as $name => $quantity)
    {
        echo "<table><tr><td>$name: </td><td>$quantity</td></tr></table>";
    }
}

?>
</body>
</html>