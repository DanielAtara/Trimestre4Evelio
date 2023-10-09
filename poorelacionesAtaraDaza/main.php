<?php 
include_once 'computador.php';
include_once 'desktop.php';
include_once 'laptop.php';

$laptop1 = new Laptop("Marca1", "32GB", "DDR4", "SSD", "1TB", "Windows 10", "Microsoft Office", "Intel Core i9", 3, true, "4 horas");
$laptop2 = new Laptop("Marca2", "16GB", "DDR4", "HDD", "1TB", "macOS", "iWork", "AMD Ryzen 7", 4, false, "6 horas");

$desktop1 = new desktop("Marca1", "16GB", "DDR4", "HDD", "1TB", "Windows 10", "Microsoft Office", "Intel Core i7", 5, true);
$desktop2 = new desktop("Marca2", "32GB", "DDR4", "SSD", "512GB", "Ubuntu", "LibreOffice", "AMD Ryzen 9", 8, false);


echo "Fabricante: " . $laptop1->getFabricante() . "<br>";
echo "Capacidad de Memoria: " . $laptop1->getCapacidadMemoria() . "<br>";
echo "Tipo de Memoria: " . $laptop1->getTipoMemoria() . "<br>";
echo "Tipo de Almacenamiento: " . $laptop1->getTipoAlmacenamiento() . "<br>";
echo "Capacidad de Almacenamiento: " . $laptop1->getCapacidadAlmacenamiento() . "<br>";
echo "Sistema Operativo: " . $laptop1->getSistemaOperativo() . "<br>";
echo "Suite de Oficina: " . $laptop1->getSuiteOficina() . "<br>";
echo "Procesador: " . $laptop1->getProcesador() . "<br>";
echo "Número de Puertos USB: " . $laptop1->getNumeroPuertosUSB() . "<br>";
echo "Tiene UPS: ";
echo "Es Táctil: ";
if ($laptop1->getTactil()) {
    echo "Sí<br>";
} else {
    echo "No<br>";
}


echo "Fabricante: " . $desktop1->getFabricante() . "<br>";
echo "Capacidad de Memoria: " . $desktop1->getCapacidadMemoria() . "<br>";
echo "Tipo de Memoria: " . $desktop1->getTipoMemoria() . "<br>";
echo "Tipo de Almacenamiento: " . $desktop1->getTipoAlmacenamiento() . "<br>";
echo "Capacidad de Almacenamiento: " . $desktop1->getCapacidadAlmacenamiento() . "<br>";
echo "Sistema Operativo: " . $desktop1->getSistemaOperativo() . "<br>";
echo "Suite de Oficina: " . $desktop1->getSuiteOficina() . "<br>";
echo "Procesador: " . $desktop1->getProcesador() . "<br>";
echo "Número de Puertos USB: " . $desktop1->getNumeroPuertosUSB() . "<br>";
echo "Tiene UPS: ";
if ($desktop1->getTactil()) {
    echo "Sí<br>";
} else {
    echo "No<br>";
}
echo computador::getfecha(). '</br>';
echo computador::numero_intentos();