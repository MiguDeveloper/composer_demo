<?php
require_once "../validacionForm/funcValidaciones/funciones.php";

echo \FuncValidaciones\suma(1,2,3,4,5);
echo "<br>";
var_dump(number_format(\FuncValidaciones\tea(1587.25,0.15,2),2));