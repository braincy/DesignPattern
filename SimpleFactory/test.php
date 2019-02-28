<?php

require_once 'OperationFactory.php';
require_once 'Operation.php';
require_once 'Operations/OperationAdd.php';
require_once 'Operations/OperationSub.php';
require_once 'Operations/OperationMul.php';
require_once 'Operations/OperationDiv.php';


$operation = OperationFactory::createOperation('+');
$operation->setA(1);
$operation->setB(2);
echo $operation->getResult().PHP_EOL;