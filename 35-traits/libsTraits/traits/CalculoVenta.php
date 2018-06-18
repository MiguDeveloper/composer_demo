<?php

namespace LibsTrait\Traits;

trait CalculoVenta
{

    private function calcularPrecioConIva(float $precio): float
    {
        return $precio * 1.18;
    }

    private function utilidadUnitaria(float $precio, float $costo): float
    {
        return $precio - $costo;
    }

    private function margenDeGananciaUnitaria(float $precio, float $costo): float
    {
        $ingreso = $precio - $costo;
        return round(($ingreso / $costo) * 100, 2);
    }
}