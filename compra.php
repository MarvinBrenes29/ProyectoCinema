<?php

require "model/clsSillas.php";
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
}


$nombrePelicula = $sillas->obtenerPelicula($idpelicula);

$_SESSION['nombrePelicula'] = $nombrePelicula;

$nombreHora = $sillas->obtenerHora($idhorario);

$nombreFecha = $sillas->obtenerFecha($idhorario);

$_SESSION['correoCliente'] = $sillas->obtenerCorreo($usuario);

$_SESSION['trailer'] = $sillas->obtenerTrailer($idpelicula);



$sillas->insertar_compra($montoEntradas, $comboEntrada, $nombrePelicula, $nombreFecha, $nombreHora, $usuario);

// enviar datos a generacionCOmprbante

$_SESSION['idcompra'] = $sillas->obtenerIdCompra($nombrePelicula, $nombreFecha, $nombreHora);

$_SESSION['nombrePelicula'] = $nombrePelicula;




// header('location: generacionComprobante.php');

header('location: pdf\PDF\generacionComprobante.php');




?>