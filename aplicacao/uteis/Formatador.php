<?php

namespace App\Uteis;

class Formatador
{
    static public function cargaHoraria(int $carga): string
    {
        return $carga . " horas";
    }
}


