<?php
namespace Libs\Matematica;

class Financiera
{
    public function tea(float $capital, float $tasa, int $periodo) : float
    {
        return number_format($capital * ((1 + $tasa) ** $periodo), 2);
    }
}