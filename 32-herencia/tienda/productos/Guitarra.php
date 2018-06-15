<?php

namespace Tienda\Productos;

use Tienda\ProductoBase;

class Guitarra extends ProductoBase
{
    /**
     * Guitarra constructor.
     */
    public function __construct($cantidad)
    {
        parent::__construct(2000, $cantidad, 20);
    }

    public function mostrarPrecioFinal()
    {
        return $this->calcularMonto();
    }
}