<?php
require_once "libs/matematica/Aritmetica.php";
require_once "libs/matematica/Financiera.php";

$obj = new \Libs\Matematica\Aritmetica();
var_dump($obj->suma(2,3));
