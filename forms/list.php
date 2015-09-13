<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 13.09.2015
 * Time: 22:32
 */
header('Content-type: text/html; charset=utf-8');
$dbh = new PDO('pgsql:host=localhost;dbname=postgres', 'postgres');
$stmt = $dbh->prepare('SELECT * FROM "public".data');
$stmt->execute();
$result = $stmt->fetchAll();

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>List</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<h3>Table</h3>
<table>
    <thead>
    <tr>
        <td>
            ID
        </td>
        <td>
            VALUE
        </td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($result as $row):?>
    <tr>
        <td>
            <?=$row['id'];?>
        </td>
        <td>
            <?=$row['value'];?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
