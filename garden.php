<?php
/**
 * Created by PhpStorm.
 * User: tanyatomchuk
 * Date: 22.09.15
 * Time: 22:07
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

foreach($garden as $kay => $kind)
{
    echo "<b>$kay:</b><br>";
    foreach($kind as $name => $quantity)
    {
        echo '<table border="2">';
        echo '<tr>';
        echo '<td>';
        echo "$name:";
        echo '</td>';
        echo '<td>';
        echo $quantity;
        echo '</td>';
        echo '</tr>';
        echo '</table>';
    }
}

?>
    </body>
</html>