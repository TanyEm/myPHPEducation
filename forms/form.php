<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 13.09.2015
 * Time: 1:34
 */
header('Content-type: text/html; charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $company = $_POST['company'];
    $dbh = new PDO('pgsql:host=localhost;dbname=postgres', 'postgres');
    $stmt = $dbh->prepare('INSERT INTO "public".data("value") VALUES (:value)');
    $stmt->bindParam(':value', $company, PDO::PARAM_STR);
    $stmt->execute();
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<form method="post">
    <label for="company">Company</label><br><br>
    <input id="company" type="text" name="company" placeholder="Company Name" required="required"/><br><br>
    <input type="submit"/>
</form>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
<div>
    <p>
        Result: <?=$company;?>
    </p>
</div>
<?php endif; ?>
</body>
</html>