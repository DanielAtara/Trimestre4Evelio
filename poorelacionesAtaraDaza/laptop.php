<?php
require_once('computador.php');
class laptop extends computador{
    private bool $tactil;
    private string $potencia_bateria;

    public function __construct(string  $fabricante,string   $capacidad_memoria, string $capacidad_almacenamiento,string $tipo_memoria,string $tipo_almacenamiento , string $sistema_operativo, string $suite_oficina,string $procesador,string $numero_puertos_usb,bool $tactil,string $potencia_bateria) {
        parent::__construct($fabricante,$capacidad_memoria,$capacidad_memoria,$capacidad_almacenamiento,$tipo_memoria,$tipo_almacenamiento,$sistema_operativo,$suite_oficina,$procesador,$numero_puertos_usb);
        $this->tactil = $tactil;
        $this->potencia_bateria = $potencia_bateria;
    }
    public function setTactil(bool $tactil) {
        $this->tactil = $tactil;
    }

    // Getter para la propiedad $tactil
    public function getTactil(): bool {
        return $this->tactil;
    }

    // Setter para la propiedad $potencia_bateria
    public function setPotenciaBateria(string $potencia_bateria) {
        $this->potencia_bateria = $potencia_bateria;
    }

    // Getter para la propiedad $potencia_bateria
    public function getPotenciaBateria(): string {
        return $this->potencia_bateria;
    }
}






