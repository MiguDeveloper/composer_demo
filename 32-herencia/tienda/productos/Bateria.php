<?php

namespace Tienda\Productos;

use Tienda\ProductoBase;

class Bateria extends ProductoBase
{
    /**
     * Bateria constructor.
     */
    public function __construct(int $cantidad = 1)
    {
        parent::__construct(1000, $cantidad, 20);
    }

    public function mostrarPrecioFinal()
    {
        return $this->calcularMonto();
    }
}