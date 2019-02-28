<?php

class OperationSub extends Operation {

    public function getResult() {
        return $this->numberA - $this->numberB;
    }
}