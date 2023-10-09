<?php
date_default_timezone_set('America/bogota');
class computador{
    private string $fabricante;
    private string $capacidad_memoria;
    private string $capacidad_almacenamiento;
    private string $tipo_memoria;
    private string $tipo_almacenamiento;
    private string $sistema_operativo;
    private string $suite_oficina;
    private string $procesador;
    private string $numero_puertos_usb;
    private static $numero_intentos;
    public function __construct(string  $fabricante,string   $capacidad_memoria, string $capacidad_almacenamiento,string $tipo_memoria,string $tipo_almacenamiento , string $sistema_operativo, string $suite_oficina,string $procesador,string $numero_puertos_usb) {
        $this->fabricante = $fabricante;
        $this->capacidad_memoria = $capacidad_memoria; 
        $this->capacidad_almacenamiento = $capacidad_almacenamiento;
        $this->tipo_memoria=$tipo_memoria;
        $this->tipo_almacenamiento=$tipo_almacenamiento;
        $this->sistema_operativo = $sistema_operativo;
        $this->suite_oficina = $suite_oficina;
        $this->procesador = $procesador;
        $this->numero_puertos_usb = $numero_puertos_usb;
        self::$numero_intentos++;

    }
        // Métodos Get
        public function getFabricante(): string {
            return $this->fabricante;
        }
    
        public function getCapacidadMemoria(): string {
            return $this->capacidad_memoria;
        }
    
        public function getCapacidadAlmacenamiento(): string {
            return $this->capacidad_almacenamiento;
        }
    
        public function getSistemaOperativo(): string {
            return $this->sistema_operativo;
        }
    
        public function getSuiteOficina(): string {
            return $this->suite_oficina;
        }
    
        public function getProcesador(): string {
            return $this->procesador;
        }
    
        public function getNumeroPuertosUsb(): string {
            return $this->numero_puertos_usb;
        }
    
        // Métodos Set
        public function setFabricante(string $fabricante) {
            $this->fabricante = $fabricante;
        }
    
        public function setCapacidadMemoria(string $capacidad_memoria) {
            $this->capacidad_memoria = $capacidad_memoria;
        }
    
        public function setCapacidadAlmacenamiento(string $capacidad_almacenamiento) {
            $this->capacidad_almacenamiento = $capacidad_almacenamiento;
        }
    
        public function setSistemaOperativo(string $sistema_operativo) {
            $this->sistema_operativo = $sistema_operativo;
        }
    
        public function setSuiteOficina(string $suite_oficina) {
            $this->suite_oficina = $suite_oficina;
        }
    
        public function setProcesador(string $procesador) {
            $this->procesador = $procesador;
        }
    
        public function setNumeroPuertosUsb(string $numero_puertos_usb) {
            $this->numero_puertos_usb = $numero_puertos_usb;
        }
        public function getTipoMemoria(): string {
            return $this->tipo_memoria;
        }
        public function setTipoMemoria(string $tipo_memoria) {
            $this->tipo_memoria = $tipo_memoria;
        }
        
        public function getTipoAlmacenamiento(): string {
            return $this->tipo_almacenamiento;
        }
        
        public function setTipoAlmacenamiento(string $tipo_almacenamiento) {
            $this->tipo_almacenamiento = $tipo_almacenamiento;
        }
        public static function getfecha(){
            return date('y-m-d H:i:s');
        }
        public static function  numero_intentos(){
            return self::$numero_intentos;
        }

    
}