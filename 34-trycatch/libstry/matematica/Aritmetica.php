<?php

namespace Libstry\Matematica;

class Aritmetica
{
    public static function division(float $a, float $b): float
    {
        /*
        if ($b == 0) {
            throw new \Exception("No se puede dividir entre cero 0");
        }*/
        return $a / $b;
    }
}