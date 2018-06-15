<?php

namespace Libs\Matematica;

class Aritmetica
{
    public function suma($a, $b)
    {
        return $a + $b;
    }

    public function resta($a, $b)
    {
        return $a - $b;
    }

    public function multiplicar($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        if ($b <= 0) {
            return null;
        } else {
            return $a / $b;
        }
    }

    public function cuadrado($a)
    {
        return $a ** 2;
    }
}