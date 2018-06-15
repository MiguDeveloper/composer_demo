<?php
require_once "vendor/autoload.php";

$pdo = new PDO("mysql:dbname=anexsotf","root","");
$fpdo = new FluentPDO($pdo);

var_dump($fpdo);