<?php

require_once 'Person.php';
require_once 'Finery.php';
require_once 'SpecificFinery/TShirt.php';
require_once 'SpecificFinery/Trouser.php';


$person  = new Person();
$shirt   = new TShirt();
$trouser = new Trouser();

$shirt->Decorate($person);
$trouser->Decorate($shirt);
$trouser->show();