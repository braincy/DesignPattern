<?php


class OperationFactory {

    public static function createOperation($operation) {

        switch ($operation) {
            case '+':
                $operation = new OperationAdd();
                break;
            case '-':
                $operation = new OperationSub();
                break;
            case '*':
                $operation = new OperationMul();
                break;
            case '/':
                $operation = new OperationDiv();
                break;
            default:
                $operation = null;
        }

        return $operation;
    }
}