<?php
namespace Juego\Personaje;

use Juego\IActor;

class Robot implements IActor {
    public function saludar()
    {
        return "el robot te saluda desde la interface";
    }

    public function atacar()
    {
        return "el robot te ataca desde la interface";
    }

}