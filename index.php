<?php
require_once __DIR__ . '/App/Money.php';
require_once __DIR__ . '/App/PriceList.php';
require 'table.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php
    ini_set('error_reporting', E_ALL);

    $price = new PriceList($arr);
    $usd = new Money('USD', 100);
    $rub = new Money('RUB', 7631);
    $eur = new Money('EUR', 85.94);

    assert($price->convert($usd, 'RUB') == 'RUB' . '7631');
    assert($price->convert($rub, 'USD') == 'USD' . '100');
    assert($price->convert($eur, 'USD') == 'USD' . '102');

    $price->convert($usd, 'RUB');
    $price->convert($rub, 'USD');
    $price->convert($eur, 'USD');

    ?>
</body>

</html>
