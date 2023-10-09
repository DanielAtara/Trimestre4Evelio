<?php

$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$operacion=$_POST['operacion'];
class calculadora{
    private int $numero1;
    private int $numero2;

    public function __construct($numero1,$numero2) {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function suma(){
        return $this->numero1+$this->numero2;
        }
    public function resta(){
        return $this->numero1-$this->numero2;
        }
    public function multiplicacion(){
        return $this->numero1*$this->numero2;
        }
    public function division(){
        return $this->numero1/$this->numero2;
        }
    

}
function validar(){
    global $operacion, $numero1, $numero2;
    $calculadora1=new calculadora($numero1,$numero2);
    if ($operacion==='suma'){
        return $calculadora1->suma();
    }
    if ($operacion==='resta'){
        return $calculadora1->resta();
    }
    if ($operacion==='multiplicacion'){
        return $calculadora1->multiplicacion();
    }
    if ($operacion==='division'){
        return $calculadora1->division();
    }

}
echo validar();