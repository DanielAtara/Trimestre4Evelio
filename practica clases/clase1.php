<?php
class aprendiz{
    public string $tipo_documento;
    public string $numero_documento;
    public string $nombre;
    public string $apellido;
    public string $correo;
    public int $edad;
    public float $peso;
    public string $activo;

public function __construct($tipo_documento,$numero_documento, $nombre, $apellido, $correo, $edad, $peso, $activo) {
    $this->tipo_documento = $tipo_documento;
    $this->numero_documento = $numero_documento;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->correo = $correo;
    $this->edad = $edad;
    $this->peso = $peso;
    $this->activo=$activo;
    
}
    
}

$aprendiz1=new aprendiz('cc','10264678','andres','castellanos','andres@gmail.com',28,60,1);

echo $aprendiz1->tipo_documento;
echo '</br>';
echo $aprendiz1->numero_documento;
echo '</br>';
echo $aprendiz1->nombre;
echo '</br>';
echo $aprendiz1->apellido;
echo '</br>';
echo $aprendiz1->correo;
echo '</br>';
echo $aprendiz1->edad;
echo '</br>';
echo $aprendiz1->peso;
echo '</br>';
echo $aprendiz1->activo;
