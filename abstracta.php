<?php
abstract class figura{
    private $num_lados=1;
    private $nombre;

    public function __construct($num_lados,$nombre){
        $this->num_lados = $num_lados;
        $this->nombre = $nombre;
    }

    public function imprimir(){
        echo 'soy un metodo de una clase abstracta';
    }
    public function getNumlados(){
        return $this->num_lados;
     } 
     public function setNumlados($num_lados){
        $this->num_lados = $num_lados;
     }
     public function getNombre(){
        return  $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
}


class triangulo extends figura{
    private int $base;
    private int $altura;

    public function __construct(int $num_lados, string $nombre, int $base, int $altura) {
        parent::__construct($num_lados, $nombre);
        $this->base=$base;
        $this->altura = $altura;
    }
    public function area() {
        return ($this->base*$this->altura)/2;
    }
}

$triangulo=new triangulo(3,'triangulo',15,30);

echo 'el area del triangulo es '.$triangulo->area().'</br>';

class cuadrado extends figura{
    private int $longitud_lados;

    public function __construct(int $num_lados, string $nombre, int $longitud_lados) {
        parent::__construct($num_lados, $nombre);
        $this->longitud_lados = $longitud_lados;
    }
    public function area_cuadrado() {
        return $this->longitud_lados*4;
    }
}

$cuadrado1=new cuadrado(4,'cuadrado',30);

echo 'el area del cuadrado es '.$cuadrado1->area_cuadrado();