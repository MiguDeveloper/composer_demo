<?php

require_once "juego/Personaje.php";
require_once "juego/IActor.php";
require_once "juego/personaje/Mercenario.php";
require_once "juego/personaje/Robot.php";

$obj = new \Juego\Personaje\Robot();

echo $obj->saludar();
