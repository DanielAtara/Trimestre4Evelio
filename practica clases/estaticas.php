<?php
class Empleado{
    protected $nombre;
    protected $fechaNacimiento;
    public static $nacionalidad;
    public static $contador = 0;

    public function __construct($nombre, $fechaNacimiento){
        $this->nombre = $nombre;
        $this->fechaNacimiento=$fechaNacimiento;
    }
    public static function metodoEstatico(){
        echo "Soy un método estático. No necesito un objeto, me invocas desde la clase <br>";
    }
    public function metodoNoEstatico(){
        echo "Soy un método NO estático. Necesito un objeto que me invoque <br>";
    }
    public function contar(){
        echo "Conteo: " . self::$contador+=1;
        return;
    }
}