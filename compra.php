<?php
include "model/clsSillas.php";
session_start();
$sillas = new clsSillas();


$idhorario = $_SESSION['idhorario'];
$vector = $_SESSION['vector'];
$comboEntrada = $_SESSION['comboentrada'];
$montoEntradas = $_SESSION['montoEntradas'];
$usuario = $_SESSION['usuario'];
$idpelicula = $_SESSION['idpelicula'];

$longitud = count($vector);

for($i=0; $i<$longitud; $i++){

    $sillas->insertar_asiento($vector[$i], $idhorario);
    echo 'si entro'.$i;
}


$sillas->insertar_compra($usuario, $idpelicula, $idhorario, $montoEntradas, $comboEntrada);



header('location: index.php');

?>