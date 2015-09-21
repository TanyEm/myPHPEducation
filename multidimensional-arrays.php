<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 16.09.2015
 * Time: 3:19
 */
header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Многомерные массивы</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<?php
echo '<h1>Многомерный массив</h1>';
echo '<h2>Первый шкаф</h2>';

$book1 = [
    'author' => 'Л. Толстой',
    'title' => 'Война и мир',
    'year' => 2005
];
$book2 = [
    'author' => 'Н.Гоголь',
    'title' => 'Мертвые души',
    'year' => 2005
];
$book3 = [
    'author' => 'Г. Уеллс',
    'title' => 'Машина времени',
    'year' => 2009
];
$book4 = [
    'author' => 'Э. Берроуз',
    'title' => 'Тарзан',
    'year' => 1994
];

$shelf1[1] = $book1;
$shelf1[2] = $book2;

$shelf2[3] = $book3;
$shelf2[4] = $book4;

$bookshelf[1] = $shelf1;
$bookshelf[2] = $shelf2;

echo '<pre>';
print_r($bookshelf);
echo '</pre>';

echo '<br>';
echo '<h2>Второй шкаф</h2>';
echo '<br>';

$shelf = [
    'shelf one' => [
        'actor one' => [
            'actor' => 'Anne Hathaway',
            'film' => 'Interstellar'
        ],
        'actor two' => [
            'actor' => 'Anne Hathaway',
            'film' => 'The Devil Wears Prada'
        ],
        'actor tree' => [
            'actor' => 'Anne Hathaway',
            'film' => 'Hoodwinked!'
        ],
    ],
    'shelf two' => [
        'actor four' => [
            'actor' => 'Scarlett Johansson',
            'film' => 'The Avengers'
        ],
        'actor five' => [
            'actor' => 'Scarlett Johansson',
            'film' => 'The Other Boleyn Girl'
        ],
    ],
];
$shelf['shelf tree'] = [
    'actor six' => [
        'actor' => 'Amanda Seyfried',
        'film' => 'In Time'
    ]
];
echo '<pre>';
print_r($shelf);
echo '</pre>';

echo '<br><br>';
echo 'Второй диск на первой полке '.$shelf['shelf tree']['actor six']['actor'].'<br>';
?>
</body>
</html>