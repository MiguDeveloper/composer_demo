<?php

require_once "libs/matematica/Financiera.php";

$obj = new \Libs\Financiera\Matematica\Financiera(10000,0.25,2);

var_dump($obj->tea());