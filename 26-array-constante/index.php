<?php
// Declaracion de constantes: tiene un valor unico en todo el ciclo de vida de la aplicacion
// Por ejemplo identificaremos los entornos: desarrollo, testing, produccion
// el caracter de asignacion no es aplicable e.g. _ENVIROMENT = 'prod'
// define("_ENVIROMENT_","dev");
// echo _ENVIROMENT_;
// La novedad en php 7 array constante
define("_DB_CONFIG_", [
    "host" => "tuna.pe:84",
    "user" => "root",
    "pwd" => ""
]);

var_dump(_DB_CONFIG_["host"]);
