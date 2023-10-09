<?php
require_once('computador.php');
class desktop extends computador{
    private bool $ups;

    public function __construct(string  $fabricante,string   $capacidad_memoria, string $capacidad_almacenamiento,string $tipo_memoria,string $tipo_almacenamiento , string $sistema_operativo, string $suite_oficina,string $procesador,string $numero_puertos_usb,bool $ups) {
        parent::__construct($fabricante,$capacidad_memoria,$capacidad_memoria,$capacidad_almacenamiento,$tipo_memoria,$tipo_almacenamiento,$sistema_operativo,$suite_oficina,$procesador,$numero_puertos_usb);
        $this->ups = $ups;
    
    }
    public function setTactil(bool $ups) {
        $this->ups = $ups;
    }

    // Getter para la propiedad $tactil
    public function getTactil(): bool {
        return $this->ups;
    }

}