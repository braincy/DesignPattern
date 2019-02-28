<?php

class OperationDiv extends Operation {

    public function getResult() {
        if ($this->numberB == 0) {
            return 'Divisor can not be zero';
        }
        return $this->numberA / $this->numberB;
    }
}