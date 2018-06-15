<?php
declare(strict_types=1);

namespace FuncValidaciones;

function is_date($value)
{
    $value = explode("/", $value);
    if (count($value) !== 3) return false;

    return checkdate($value[1], $value[0], $value[2]);
}

// indicamos un tipo especifico de parametros asi como su tipo de retorno
function suma(int ...$valores): int
{
    return array_sum($valores);
}

function tea(float $capital, float $tasa, int $periodo): float
{
    return ($capital * ((1 + $tasa) ** $periodo));
}