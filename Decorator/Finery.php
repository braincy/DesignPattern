<?php

class Finery extends Person {

    protected $component;

    // 装扮
    public function Decorate(Person $component) {
        $this->component = $component;
    }

    public function show() {
        if (isset($this->component)) {
            $this->component->show();
        }
    }
}