<?php

namespace Tienda\Productos;

use Tienda\ProductoBase;

class Bajo extends ProductoBase
{
    /**
     * Bajo constructor.
     */
    public function __construct(int $cantidad = 1)
    {
        parent::__construct(100, $cantidad, 20);
    }

    public function mostrarPrecioFinal(){
        return $this->calcularMonto();
    }
}