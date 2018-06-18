<?php

namespace Juego;

// Importante es que las clases abtractas no se implementan se extienden
abstract class Personaje
{
    abstract public function saludar();

    public function atacar()
    {
        return "te estoy atacando";
    }
}