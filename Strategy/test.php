<?php

require_once 'CashContext.php';
require_once 'CashAbstract.php';
require_once 'CashAlgorithms/CashNormal.php';
require_once 'CashAlgorithms/CashRebate.php';
require_once 'CashAlgorithms/CashReturn.php';


$selectType = ['正常收费', '满 300 返 100', '打 8 折'];
$money = 1000;

foreach ($selectType as $type) {
    $cAbstract = new CashContext($type);
    $currentPrice = $cAbstract->getResult($money);
    echo '['.$type.'] 原价：'.$money.' 现价：'.$currentPrice.PHP_EOL;
}