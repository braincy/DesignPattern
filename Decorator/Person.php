<?php

class Person {

    private $name;

    public function __construct($name = 'braincy') {
        $this->name = $name;
    }

    public function show() {
        echo '装扮的' . $this->name . PHP_EOL;
    }
}