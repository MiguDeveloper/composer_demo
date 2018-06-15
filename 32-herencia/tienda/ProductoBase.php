<?php
namespace Tienda;

class ProductoBase
{
    protected $precio;
    protected $cantidad;
    protected $descuento;

    /**
     * ProductoBase constructor.
     * @param $precio
     * @param $cantidad
     * @param $descuento
     */
    public function __construct(float $precio, int $cantidad, float $descuento)
    {
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->descuento = $descuento;
    }

    // protected significa que solo lo pueden invocar desde la clase que lo hereda
    protected function calcularMonto(): float
    {
        $incluyeDescuento = 1 - ($this->descuento / 100);
        return ($this->precio * $this->cantidad) * $incluyeDescuento;
    }
}