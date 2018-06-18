<?php
namespace LibsTrait;
require_once "traits/CalculoVenta.php";

class Producto{
    use Traits\CalculoVenta;

    private $nombre;
    private $marca;
    private $precioUnitario;
    private $costoUnitario;

    /**
     * Producto constructor.
     * @param $nombre
     * @param $marca
     * @param $precioUnitario
     * @param $costoUnitario
     */
    public function __construct($nombre, $marca, $precioUnitario, $costoUnitario)
    {
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->precioUnitario = $precioUnitario;
        $this->costoUnitario = $costoUnitario;
    }

    public function iva():float {
        return $this->calcularPrecioConIva($this->precioUnitario);
    }

    public function margen():float {
        return $this->margenDeGananciaUnitaria($this->precioUnitario, $this->costoUnitario);
    }

    public function utilidad():float {
        return $this->utilidadUnitaria($this->precioUnitario,$this->costoUnitario);
    }

}