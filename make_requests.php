<?php

use Yuloh\Math\AddRequest;
use Yuloh\Math\CalculatorClient;
use Yuloh\Math\SubtractRequest;

require __DIR__ . '/vendor/autoload.php';

$calculator = new CalculatorClient();

$req   = (new AddRequest())->setX(2)->setY(4);
$reply = $calculator->add($req);

echo '2 + 4 = ' . $reply->getSum() . PHP_EOL;

$req   = (new SubtractRequest())->setX(5)->setY(4);
$reply = $calculator->subtract($req);

echo '5 - 4 = ' . $reply->getDiff() . PHP_EOL;