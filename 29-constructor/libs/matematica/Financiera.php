<?php

namespace Libs\Financiera\Matematica;

class Financiera
{
    private $capital;
    private $tasa;
    private $periodo;

    /**
     * Financiera constructor.
     * @param $capital
     * @param $tasa
     * @param $periodo
     */
    public function __construct(float $capital, float $tasa, float $periodo)
    {
        $this->capital = $capital;
        $this->tasa = $tasa;
        $this->periodo = $periodo;
    }


    public function tea(): float
    {
        return $this->capital * ((1 + $this->tasa) ** $this->periodo);
    }
}